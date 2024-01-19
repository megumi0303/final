<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1516803-final';
    const USER = 'LAA1516803';
    const PASS = 'Pass1212';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<?php
    // error_reporting(0);
    // ini_set('display_errors', 0);
    // session_start();
    $pdo = new PDO($connect,USER,PASS);
        if(isset($_POST['insert'])) {
            $login_success_url="";
            $error_message = "";
            $environment_name = $_POST['environment_name'];
           
            $sql = $pdo->prepare('insert into environment(environment_name) value (?)');
            if(empty($environment_name)){
                $error_message = '配信環境名を入力してください';
            }else{
                $sql->execute([$environment_name]);
                $login_success_url = "insert.php";
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
            text-align: center;
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
            border: 2px solid #e83333;
            color: #e83333;
            border-radius: 100vh;
            transition: 0.5s;
        }
        .button:hover {
            color: #fff;
            background: #eb6c6c;
        }
    </style>
</head>
<body>
<div class="main">
<h1>新規配信環境登録</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
<br>
    <form action="e_add.php" method="post">
        配信環境名：<input type="text"  class="text" name="environment_name" style="width: 120px; height=30px"><br><br>
    <input type="submit" name="insert" value="登録" class="button">
    </form>
    <div class="error">
        <?php
            if(!empty($error_message)){
                echo $error_message;
            }
        ?>
    </div>
    </div>
</body>
</html>