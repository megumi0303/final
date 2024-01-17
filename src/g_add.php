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
            $group_name = $_POST['group_name'];
           
            $sql = $pdo->prepare('insert into liver_group(group_name) value (?)');
            if(empty($group_name)){
                $error_message = 'グループ名を入力してください';
            }else{
                $sql->execute([$group_name]);
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
</head>
<body>
<h1>新規登録</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
    <form action="g_add.php" method="post">
        グループ名：<input type="text"  class="text" name="group_name" style="width: 120px; height=30px"><br>
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