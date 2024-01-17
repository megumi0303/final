<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1516803-final';
    const USER = 'LAA1516803';
    const PASS = 'Pass1212';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>最終課題</title>
</head>
<body>
<p>登録が完了しました。</p>
<hr>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $id=$pdo->query('select max(id) from liver')->fetchColumn();
    $sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
    $sql->execute([$id]);
    echo '<table>';
    echo '<tr><th>名前</th><th>誕生日</th><th>年齢</th><th>メインカラー</th><th>紹介</th><th>所属グループ</th><th>メイン配信環境</th><th>配信URL</th><th>初配信日</th><th>画像パス</th></tr>';
    foreach($sql as $row){
        echo '<tr>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['birthday'],'</td>';
        echo '<td>',$row['age'],'</td>';
        echo '<td>',$row['main_color'],'</td>';
        echo '<td>',$row['outline'],'</td>';
        echo '<td>',$row['group_name'],'</td>';
        echo '<td>',$row['environment_name'],'</td>';
        echo '<td>',$row['url'],'</td>';
        echo '<td>',$row['live_stday'],'</td>';
        echo '<td>',$row['image'],'</td>';
        echo '<td>',$row['video1'],'</td>';
        echo '<td>',$row['video2'],'</td>';
        echo '</tr>';
        echo "\n";
    }
    echo '</table>';
?>
    <form action="menu.php" method="post">
        <input type="submit" value="ホームへ戻る">
    </form>
</body>
</html>