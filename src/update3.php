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
            }else if($sql->execute([$_POST['name'],$_POST['birthday'],$_POST['age'],$_POST['main_color'],$_POST['outline'],$_POST['group_name'],$_POST['environment_name'],$_POST['url'],$_POST['live_stday'],$_POST['image']])){
                echo '更新が完了しました';
            }else{
                echo '更新に失敗しました';
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
        <tr><th>名前</th><th>誕生日</th><th>年齢</th><th>メインカラー</th><th>紹介</th><th>所属グループ</th><th>配信環境</th><th>初配信日</th><th>配信URL</th><th>画像パス</th></tr>
        <?php
            $pdo=new PDO($connect, USER, PASS);
            $sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
            $sql->execute([$_POST['id']]);
            foreach($sql as $row){
                echo '<tr>';
                echo '<td>',$row['name'],'</td>';
                echo '<td>',$row['birthday'],'</td>';
                echo '<td>',$row['age'],'</td>';
                echo '<td>',$row['main_color'],'</td>';
                echo '<td>',$row['outline'],'</td>';
                echo '<td>',$row['group_name'],'</td>';
                echo '<td>',$row['environment_name'],'</td>';
                echo '<td>',$row['url'],'</td>';
                echo '<td>',$row['live_stday'],'</td>';
                echo '<td>',$row['image'],'</td>';
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