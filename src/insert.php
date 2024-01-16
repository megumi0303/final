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
            $group_id = $_POST['group_id'];
            $environment_id = $_POST['environment_id'];
            $url = $_POST['url'];
            $live_stday = $_POST['live_stday'];
            $image = $_POST['image'];
           
            $sql = $pdo->prepare('insert into liver(name,birthday,age,main_color,outline,group_id,environment_id,url,live_stday,image) value (?,?,?,?,?,?,?,?,?,?)');
            if(empty($name)){
                $error_message = '名前を入力してください';
            }else if(empty($main_color)){
                $error_message = 'メインカラーを入力してください';
            }else if(empty($outline)){
                $error_message = '紹介文を入力してください';
            }else if(strlen($_POST['outline']) > 100){
                $error_message = '紹介文を100文字以内で入力してください';
            }else if(empty($url)){
                $error_message = 'URLを入力してください';
            }else if(empty($live_stday)){
                $error_message = '配信開始日を入力してください';
            }else if(empty($image)){
                $error_message = '画像パスを入力してください';
            }else{
                $sql->execute([$name,$birthday,$age,$main_color,$outline,$group_id,$environment_id,$url,$live_stday,$image]);
                $login_success_url = "insert2.php";
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
<h1>新規登録</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
    <form action="insert2.php" method="post">
        名前：<input type="text"  class="text" name="name" style="width: 120px; height=30px"><br>
        誕生日：<input type="date" name="birthday"><br>
        年齢：<input type="text" class="text" name="age" style="width: 70px; height=30px">歳<br>
        メインカラー：<input type="text" class="text" name="main_color" style="width: 70px; height=30px"><br><br>
        紹介：<textarea name="outline" cols="40" rows="3"></textarea><br>
        <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql1 = 'select * from liver_group';
        $data1 ="";

        if($stmt1 = $pdo->query($sql1)) {
            foreach($stmt1 as $row){
                $data1 .= "<option value='". $row['group_id'];
                $data1 .= "'>". $row['group_name']. "</option>";
            }
        }

        $sql2 = 'select * from environment';
        $data2 ="";

        if($stmt2 = $pdo->query($sql2)) {
            foreach($stmt2 as $row){
                $data2 .= "<option value='". $row['environment_id'];
                $data2 .= "'>". $row['environment_name']. "</option>";
            }
        }

        echo '所属グループ：';
        echo '<select name="group">';
        echo $data1;
        echo '</select>';
        echo '<br>';

        echo '配信環境：';
        echo '<select name="environment">';
        echo $data2;
        echo '</select>';
        echo '<br>';
        ?>
        初配信日：<input type="date" name="live_stday"><br>
        配信URL：<textarea name="url" cols="40" rows="3"></textarea><br>
        画像パス:<input type="text" class="text" name="image" style="width: 80px; height=30px">.jpeg<br><br>
        <input type="submit" name="insert" value="登録" class="button">
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