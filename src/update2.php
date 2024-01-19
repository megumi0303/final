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
        if(isset($_POST['update'])) {
            var_dump($_POST);
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
            $video1 = $_POST['video1'];
            $video2 = $_POST['video2'];
            // $id = $_POST['id'];
           
            $sql = $pdo->prepare('update liver set name=?,birthday=?,age=?,main_color=?,outline=?,group_id=?,environment_id=?,url=?,live_stday=?,image=?,video1=?,video2=? where id=?');
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
            }else if(empty($image)){
                $error_message = '画像パスを入力してください';
            }else{
                $sql->execute([$name,$birthday,$age,$main_color,$outline,$group_id,$environment_id,$url,$live_stday,$image,$video1,$video2,$id]);
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
    <link rel="stylesheet" href="../css/style.css">
    <title>最終課題</title>
    <style>
    .text{
        font-size: 18px;
    }
    .button1 {
        display: block;
        text-align: center;
        vertical-align: middle;
        /* text-decoration: none; */
        height: 50px;
        width: 120px;
        margin: auto;
        /* padding: 1rem 4rem; */
        font-weight: bold;
        border: 2px solid #e83333;
        color: #e83333;
        border-radius: 100vh;
        transition: 0.5s;
    }
    .button1:hover {
        color: #fff;
        background: #eb6c6c;
    }
    .button2 {
        display: block;
        text-align: center;
        vertical-align: middle;
        /* text-decoration: none; */
        height: 50px;
        width: 120px;
        margin: auto;
        /* padding: 1rem 4rem; */
        font-weight: bold;
        border: 2px solid #a913ba;
        color: #a913ba;
        border-radius: 100vh;
        transition: 0.5s;
    }
    .button2:hover {
        color: #fff;
        background: #eb95f5;
    }
    .main{
        /* display: flex; */
        align-items: center;
        text-align: center;
        font-size: 20px;
        padding-bottom: 5px;
        font-family: 'Hannotate SC',sans-serif;
    }
    .text{
        line-height: 1.5;
    }
    select{
        font-size: 18px;
        font-family: 'Hannotate SC',sans-serif;
    }
    input{
        font-family: 'Hannotate SC',sans-serif;
    }
    textarea{
        font-family: 'Hannotate SC',sans-serif;
    }
    .btn{
        display: flex;
        justify-content: center;
        /* margin: auto; */
    }
    .back,.up{
        /* text-align: center; */
        margin: auto;
    }
    </style>
</head>
<body>
<div class="main">
<h1>更新</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
        <?php
            $pdo=new PDO($connect, USER, PASS);
            $sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
            $sql->execute([$_POST['id']]);
            foreach ($sql as $row) {
                // echo '<form action="update2.php" method="post">';
                echo 'ID:<input type="hidden" class="text" name="id" value="', $row['id'], '">';
                echo $row['id'];
                echo '<br>';
                echo '名前：<input type="text" class="text" name="name" value="', $row['name'], '"><br>';
                echo '誕生日：<input type="date" class="text" name="birthday" value="', $row['birthday'], '"><br>';
                echo '年齢：<input type="text" class="text" name="age" value="', $row['age'], '"><br>';
                echo 'メインカラー：<input type="text" class="text" name="main_color" value="', $row['main_color'], '"><br>';
                echo '紹介：';
                echo '<textarea name="outline cols="40" rows="3"">';
                echo $row['outline'];
                echo '</textarea><br>';
                
                $pdo=new PDO($connect, USER, PASS);
                $sql1 = 'select * from liver_group';
                $data1 ="";

                $data1 .= "<option value='". $row['group_id'];
                $data1 .= "'>". $row['group_name']. "</option>";

                if($stmt1 = $pdo->query($sql1)) {
                    foreach($stmt1 as $row1){
                        $data1 .= "<option value='". $row1['group_id'];
                        $data1 .= "'>". $row1['group_name']. "</option>";
                    }
                }

                $sql2 = 'select * from environment';
                $data2 ="";

                $data2 .= "<option value='". $row['environment_id'];
                $data2 .= "'>". $row['environment_name']. "</option>";

                if($stmt2 = $pdo->query($sql2)) {
                    foreach($stmt2 as $row2){
                        $data2 .= "<option value='". $row2['environment_id'];
                        $data2 .= "'>". $row2['environment_name']. "</option>";
                    }
                }

                echo '所属グループ：';
                echo '<select name="group_id">';
                echo $data1;
                echo '</select><br>';

                echo '配信環境：';
                echo '<select name="environment_id">';
                echo $data2;
                echo '</select><br>';

                echo '初配信日：<input type="date" class="text" name="live_stday" value="', $row['live_stday'], '"><br>';
                echo '配信URL：';
                echo '<textarea name="url">';
                echo $row['url'];
                echo '</textarea><br>';
                echo '画像パス：<input type="text" class="text" name="image" value="', $row['image'], '"><br>';
                echo '動画URL1：';
                echo '<textarea name="video1">';
                echo $row['video1'];
                echo '</textarea><br>';
                echo '動画URL2：';
                echo '<textarea name="video2">';
                echo $row['video2'];
                echo '</textarea><br><br>';
                echo '<div class="btn">';
                    echo '<div class="back">';
                    echo '<form action="update.php" method="post">';
                    echo '<input type="hidden" name="id" value="',$row['id'],'">';
                    echo '<button type="submit" class="button2">戻る</button><br>';
                    echo '</form>';
                    echo '</div>';
                    echo '<div class="up">';
                    echo '<form action="update3.php" method="post">';
                    echo '<input type="hidden" name="id" value="',$row['id'],'">';
                    echo '<button type="submit" class="button1">更新</button><br>';
                    echo '</form>';
                    echo '</div>';
                echo '</div>';
                echo "\n";
            }
        ?>
</div>
<!-- <div class="btn">
    <div class="back">
    <input type="button" class="button2" onclick="location.href='update.php'" value="戻る">
    </div>
    <?php
    // echo '<div class="up">';
    // echo '<form action="update3.php" method="post">';
    // echo '<input type="hidden" name="id" value="',$row['id'],'">';
    // echo '<button type="submit" class="button1">更新</button><br>';
    // echo '</form>';
    // echo '</div>';
    ?>
    <input type="button" class="button1" onclick="location.href='delete3.php'" value="削除"> -->
</div>
    <div class="error">
        <?php
            if(!empty($error_message)){
                echo $error_message;
            }
        ?>
    </div>
</body>
</html>