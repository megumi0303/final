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
<link rel="stylesheet" href="../css/style.css"> 
<style>
.text{
  font-size: 25px;
}
.button {
    display: block;
    text-align: center;
    vertical-align: middle;
    /* text-decoration: none; */
    height: 50px;
    width: 120px;
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
    <title>PHP最終課題</title>
</head>
<body>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
$sql->execute([$_GET['id']]);
foreach ($sql as $row) {
    echo '<p><img alt="image" src="../image/', $row['image'], '.jpeg" height="400" width="440"></p></div>';
    echo '<h1>',$row['name'],'</h1><br>';
    echo '<div class="text">';
    if(!($row['birthday'] == '0000-00-00')){
        echo '誕生日：', $row['birthday'],'<br>';
    }
    if(!($row['age'] == 0)){
        echo '年齢：', $row['age'],'<br>';
    }
    echo 'メインカラー：', $row['main_color'],'<br>';
    echo '紹介：', $row['outline'],'<br>';
    echo '所属グループ：', $row['group_name'],'<br>';
    echo 'メイン配信環境：', $row['environment_name'],'<br>';
    $url = $row['url'];
    echo '配信URL：<a href="', $url,'">', $url ,'</a><br>';
    echo '初配信日：', $row['live_stday'];
    echo '<br><br>';
    echo 'おすすめ動画','<br>';
    $video1 = $row['video1'];
    $video2 = $row['video2'];
    echo '<iframe width="400" height="225" src="', $video1,'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    echo '　　';
    echo '<iframe width="400" height="225" src="', $video2,'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    echo '</div>';
    echo '<form action="list.php" method="post">';
    echo '<input type="submit" class="button" value="戻る">';
    echo '</form>';
}
?>
</body>
</html>