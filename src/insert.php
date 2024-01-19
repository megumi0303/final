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
            $group_id = $_POST['group'];
            $environment_id = $_POST['environment'];
            $url = $_POST['url'];
            $live_stday = $_POST['live_stday'];
            $image = $_POST['image'];
            $video1 = $_POST['video1'];
            $video2 = $_POST['video2'];
           
            $sql = $pdo->prepare('insert into liver(name,birthday,age,main_color,outline,group_id,environment_id,url,live_stday,image,video1,video2) value (?,?,?,?,?,?,?,?,?,?,?,?)');
            if(empty($name)){
                $error_message = '名前を入力してください';
            }else if(empty($main_color)){
                $error_message = 'メインカラーを入力してください';
            }else if(empty($outline)){
                $error_message = '紹介文を入力してください';
            }else if(strlen($_POST['outline']) > 500){
                $error_message = '紹介文を500文字以内で入力してください';
            }else if(empty($url)){
                $error_message = 'URLを入力してください';
            }else if(empty($live_stday)){
                $error_message = '配信開始日を入力してください';
            }else if(empty($image)){
                $error_message = '画像パスを入力してください';
            }else{
                $sql->execute([$name,$birthday,$age,$main_color,$outline,$group_id,$environment_id,$url,$live_stday,$image,$video1,$video2]);
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
    <link rel="stylesheet" href="../css/style.css">
    <title>最終課題</title>
    <style>
        .main{
            /* display: flex; */
            align-items: center;
            text-align: center;
            font-size: 20px;
            padding-bottom: 5px;
        }
        .button {
            display: block;
            text-align: center;
            vertical-align: middle;
            /* text-decoration: none; */
            height: 50px;
            width: 120px;
            margin: auto;
            /* padding: 1rem 4rem; */
            font-weight: bold;
            border: 2px solid #fabb3c;
            color: #fabb3c;
            border-radius: 100vh;
            transition: 0.5s;
        }
        .button:hover {
            color: #fff;
            background: #ede96f;
        }
        /* .btn{
            display: flex;
            align-items: center;
        } */
        .text{
            line-height: 1.5;
        }
        select{
            font-size: 18px;
            font-family: 'Hannotate SC',sans-serif;
        }
    </style>
</head>
<body>
<div class="main">
<h1>新規登録</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
    <form action="insert.php" method="post">
        名前：<input type="text"  class="text" name="name" style="width: 130px; height=100px"><br>
        誕生日：<input type="date" name="birthday" style="width: 120px; height=100px"><br>
        年齢：<input type="text" class="text" name="age" style="width: 60px; height=100px">歳<br>
        メインカラー：<input type="text" class="text" name="main_color" style="width: 80px; height=100px"><br>
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
        echo '<a href="g_add.php">※選択肢がない場合はこちら</a>';
        echo '<br>';

        echo '配信環境：';
        echo '<select name="environment">';
        echo $data2;
        echo '</select>';
        echo '<br>';
        echo '<a href="e_add.php">※選択肢がない場合はこちら</a>';
        echo '<br>';
        ?>
        初配信日：<input type="date" name="live_stday"><br>
        配信URL：<textarea name="url" cols="40" rows="2"></textarea><br>
        画像パス:<input type="text" class="text" name="image" style="width: 80px; height=100px">.jpeg<br>
        動画URL1：<textarea name="video1" cols="40" rows="2"></textarea><br>
        動画URL2：<textarea name="video2" cols="40" rows="2"></textarea><br>
        </div>
        <!-- <div class=btn> -->
        <button type="submit" name="insert" class="button">登録</button>
        <!-- </div> -->
    </form>
    <br>
    <div class="error">
        <?php
            if(!empty($error_message)){
                echo $error_message;
            }
        ?>
    </div>
</body>
</html>