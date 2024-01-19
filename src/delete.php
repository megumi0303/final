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
    <title>最終課題</title>
    <style>
    .text{
        font-size: 18px;
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
	border: 2px solid #15b30b;
	color: #15b30b;
	border-radius: 100vh;
	transition: 0.5s;
}
.button:hover {
	color: #fff;
	background: #72eb6a;
}
.btn{
        display: flex;
        justify-content: space-between;
        place-items: center;
        padding-right: 600px;
    }
    </style>
</head>
<body>
<h1>削除</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach($pdo->query('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id') as $row){
        echo '<div class="btn">';
        echo '<img alt="image" src="../image/', $row['image'], '.jpeg" height="250" width="250">';
        echo '<form action="delete2.php" method="post">';
        echo '<input type="hidden" name="id" value="',$row['id'],'">';
        echo '<button type="submit" class="button">削除</button><br>';
        echo '</form>';
        echo '</div>';
        echo '<div class="text">';
        echo '<p>','名前：',$row['name'],'</p>';
        if(!($row['birthday'] == '0000-00-00')){
            echo '<p>誕生日：', $row['birthday'],'</p>';
        }
        if(!($row['age'] == 0)){
            echo '<p>年齢：', $row['age'],'歳</p>';
        }
        echo '<p>','メインカラー：',$row['main_color'],'</p>';
        echo '<p>','紹介：',$row['outline'],'</p>';
        echo '<p>','所属グループ：',$row['group_name'],'</p>';
        echo '<p>','配信環境：',$row['environment_name'],'</p>';
        $url = $row['url'];
        echo '<p>','配信URL：<a href="', $url,'">', $url ,'</a></p>';
        echo '<p>','初配信日：',$row['live_stday'],'</p>';
        echo '<p>','画像パス：',$row['image'],'.jpeg</p>';
        echo '<p>','おすすめ動画','</p>';
        $video1 = $row['video1'];
        $video2 = $row['video2'];
        echo '<iframe width="400" height="225" src="', $video1,'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        echo '　　';
        echo '<iframe width="400" height="225" src="', $video2,'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        // echo '<input type="hidden" name="id" value="',$row['id'],'">';
        echo '<hr>';
        echo '</div>';
    }
?>
</body>
</html>