<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1516803-final';
    const USER = 'LAA1516803';
    const PASS = 'Pass1212';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>削除完了</title>
    <style>
        .text{
            color: red;
            font-size: 20px;
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
            border: 2px solid #a913ba;
            color: #a913ba;
            border-radius: 100vh;
            transition: 0.5s;
        }
        .button:hover {
            color: #fff;
            background: #eb95f5;
        }
    </style>
</head>
<body>
<div class="text">
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('delete from liver where id=?');
        if($sql->execute([$_POST['id']])){
            echo '<br>';
            echo '削除に成功しました。';
            echo '<br><br>';
        }else{
            echo '<br>';
            echo '削除に失敗しました。';
            echo '<br><br>';
        }
?>
<form action="menu.php" method="post">
    <input type="submit" value="ホームへ戻る" class="button">
</form>
</div>
</body>
</html>