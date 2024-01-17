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
</head>
<body>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('delete from liver where id=?');
        if($sql->execute([$_POST['id']])){
            echo '削除に成功しました。';
        }else{
            echo '削除に失敗しました。';
        }
?>
<form action="menu.php" method="post">
    <input type="submit" value="ホームへ戻る" class="button2">
</form>
</body>
</html>