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
    <link rel="stylesheet" href="../css/frame.css">
    <title>最終課題</title>
</head>
<body>
<h1>更新</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach($pdo->query('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id') as $row){
        echo '<p><img alt="image" src="../image/', $row['image'], '.jpeg" height="150" width="170"></p>';
        echo '<p>','名前：',$row['name'],'</p>';
        echo '<p>','誕生日：',$row['birthday'],'</p>';
        echo '<p>','年齢：',$row['age'],'</p>';
        echo '<p>','メインカラー：',$row['main_color'],'</p>';
        echo '<p>','紹介：',$row['outline'],'</p>';
        echo '<p>','所属グループ：',$row['group_name'],'</p>';
        echo '<p>','配信環境：',$row['environment_name'],'</p>';
        echo '<p>','配信URL：',$row['url'],'</p>';
        echo '<p>','初配信日：',$row['live_stday'],'</p>';
        echo '<p>','画像パス：',$row['image'],'</p>';
        echo '</div>';
        echo '<form action="update2.php" method="post">';
        echo '<input type="hidden" name="id" value="',$row['id'],'">';
        echo '<button type="submit" class="button">更新</button>';
        echo '</form>';
        echo '</div>';
    }
?>
</body>
</html>