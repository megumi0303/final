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
    <title>PHP最終課題</title>
</head>
<body>
    <h2>推しゲーム配信者</h2>
        <?php
            $pdo= new PDO($connect,USER,PASS);
            $sql=$pdo->query('select * from liver');            
            foreach ($sql as $row) {
              $id=$row['liver_id'];
              echo '<li><a href="detail.php?id=', $id, '"><img alt="image" src="../img/', $row['image'], '.jpg" height="240" width="260">';
              echo '<h3><a href="detail.php?id=', $id, '">', $row['liver_name'], '</a></h3>';
              echo '<span><h4>¥','誕生日:',$row['birthday'],'</span><span>','年齢:',$row['age'], '</h4></span></li>';
          }
          echo '</ul>';
          echo '</div>';
          ?>
        </div>
</body>
</html>
