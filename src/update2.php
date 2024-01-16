<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1516803-final';
    const USER = 'LAA1516803';
    const PASS = 'Pass1212';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<?php
    error_reporting(0);
    ini_set('display_errors', 0);
    session_start();
    $pdo = new PDO($connect,USER,PASS);
        if(isset($_POST['insert'])) {
            $login_success_url="";
            $error_message = "";
            $name = $_POST['name'];
            $birthday = $_POST['birthday'];
            $age = $_POST['age'];
            $main_color = $_POST['main_color'];
            $outline = $_POST['outline'];
            $group_name = $_POST['group_name'];
            $environment_name = $_POST['environment_name'];
            $url = $_POST['url'];
            $live_stday = $_POST['live_stday'];
            $image = $_POST['image'];
           
            $sql = $pdo->prepare('update liver set name=?,birthday=?,age=?,main_color=?,outline=?,group_name=?,environment_name=?,url=?,live_stday=?,image=? where id=?');
            if(empty($name)){
                $error_message = '名前を入力してください';
            }else if(empty($main_color)){
                $error_message = 'メインカラーを入力してください';
            }else if(empty($outline)){
                $error_message = '紹介文を入力してください';
            }else if(strlen($_POST['outline']) > 50){
                $error_message = '紹介文を50文字以内で入力してください';
            }else if(empty($url)){
                $error_message = 'URLを入力してください';
            }else if(empty($live_stday)){
                $error_message = '配信開始日を入力してください';
            }else if(empty($image)){
                $error_message = '画像パスを入力してください';
            }else{
                $sql->execute([$name,$birthday,$age,$main_color,$outline,$group_name,$environment_name,$url,$live_stday,$image]);
                $login_success_url = "update3.php";
                header("Location: {$login_success_url}");
                exit;
            }
                
        }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/frame.css">
    <title>最終課題</title>
</head>
<body>
<h1>更新</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
    <table>
        <tr><th>ID</th><th>名前</th><th>誕生日</th><th>年齢</th><th>メインカラー</th><th>紹介</th><th>所属グループ</th><th>配信環境</th><th>初配信日</th><th>配信URL</th><th>画像パス</th></tr>
        <?php
            $pdo=new PDO($connect, USER, PASS);
            $sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
            $sql->execute([$_POST['id']]);
            foreach ($sql as $row) {
                echo '<tr>';
                echo '<form action="update3.php" method="post">';
                echo '<td>';
                echo '<input type="hidden" name="id" value="', $row['id'], '">';
                echo $row['id'];
                echo '</td> ';
                echo '<td>';
                echo '<input type="text" name="name" value="', $row['name'], '">';
                echo '</td> ';
                echo '<td>';
                echo '<input type="date" name="birthday" value="', $row['birthday'], '">';
                echo '</td> ';
                echo '<td>';
                echo '<input type="text" name="age" value="', $row['age'], '">';
                echo '</td> ';
                echo '<td>';
                echo ' <input type="text" name="main_color" value="', $row['main_color'], '">';
                echo '</td> ';
                echo '<td>';
                echo '<textarea name="outline">';
                echo $row['outline'];
                echo '</textarea>';
                echo '</td> ';
                
                $pdo=new PDO($connect, USER, PASS);
                $sql1 = 'select * from liver_group';
                $data1 ="";

                $data1 .= "<option value='". $row['group_name'];
                $data1 .= "'>". $row['group_name']. "</option>";

                if($stmt1 = $pdo->query($sql1)) {
                    foreach($stmt1 as $row1){
                        $data1 .= "<option value='". $row1['group_id'];
                        $data1 .= "'>". $row1['group_name']. "</option>";
                    }
                }

                $sql2 = 'select * from environment';
                $data2 ="";

                $data2 .= "<option value='". $row['environment_name'];
                $data2 .= "'>". $row['environment_name']. "</option>";

                if($stmt2 = $pdo->query($sql2)) {
                    foreach($stmt2 as $row2){
                        $data2 .= "<option value='". $row2['environment_id'];
                        $data2 .= "'>". $row2['environment_name']. "</option>";
                    }
                }

                echo '<td>';
                echo '<select name="group">';
                echo $data1;
                echo '</select>';
                echo '</td>';

                echo '<td>';
                echo '<select name="environment">';
                echo $data2;
                echo '</select>';
                echo '</td>';
                
                echo '<td>';
                echo '<input type="date" name="birthday" value="', $row['live_stday'], '">';
                echo '</td> ';
                echo '<td>';
                echo '<textarea name="url">';
                echo $row['url'];
                echo '</textarea>';
                echo '</td> ';
                echo '<td>';
                echo ' <input type="text" name="image" value="', $row['image'], '">';
                echo '</td> ';
                echo '<td><input type="submit" value="更新"></td>';
                echo '</form>';
                echo '</tr>';
                echo "\n";
            }
        ?>
    </table>
    <form action="update.php" method="post">
        <input type="submit" value="選択画面へ戻る" class="button2">
    </form>
    <div class="error">
        <?php
            if(!empty($error_message)){
                echo $error_message;
            }
        ?>
    </div>
</body>
</html>