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
    <link rel="stylesheet" href="../css/frame.css">
    <title>PHP最終課題</title>
</head>
<body>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
$sql->execute([$_GET['id']]);
foreach ($sql as $row) {
    echo '<p><img alt="image" src="../image/', $row['image'], '.jpeg" height="400" width="440"></p></div>';
    echo '<h2>', $row['name'], '</h1>';
    echo '<h3>誕生日：¥', $row['birthday'], '</h3>';
    echo '<h3>年齢：', $row['age'], '</h3>';
    echo '<h3>メインカラー：', $row['main_color'], '</h3>';
    echo '<h3>紹介：', $row['outline'], '</h3>';
    echo '<h3>所属グループ：', $row['group_name'], '</h3>';
    echo '<h3>メイン配信環境：', $row['environment_name'], '</h3>';
    echo '<h3>配信URL：', $row['url'], '</h3>';
    echo '<h3>初配信日：', $row['live_stday'], '</h3>';
}
?>
</body>
</html>