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
    <link rel="stylesheet" href="css/frame.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>PHP最終課題</title>
</head>
<body>
    <h2>推しゲーム配信者</h2>
        <?php
            $pdo= new PDO($connect,USER,PASS);
            $sql=$pdo->query('select * from liver');            
            foreach ($sql as $row) {
              $id=$row['id'];
              echo '<a href="detail.php?id=', $id, '"><img alt="image" src="../image/', $row['image'], '.jpeg" height="240" width="260">';
              echo '<h3><a href="detail.php?id=', $id, '">', $row['name'], '</a></h3>';
          }
          ?>
</body>
</html>
