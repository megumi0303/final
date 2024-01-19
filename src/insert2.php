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
    <style>
        .main{
            font-size: 22px;
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
        p{
            color: red;
            font-size: 25px;
        }
    </style>
</head>
<body>
<p>登録が完了しました。</p>
<hr>
<?php
    echo '<div class="main">';
    $pdo=new PDO($connect,USER,PASS);
    $id=$pdo->query('select max(id) from liver')->fetchColumn();
    $sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
    $sql->execute([$id]);
    foreach($sql as $row){
        echo '名前：',$row['name'],'<br>';
        if(!($row['birthday'] == '0000-00-00')){
            echo '誕生日：', $row['birthday'],'<br>';
        }
        if(!($row['age'] == 0)){
            echo '年齢：', $row['age'],'歳<br>';
        }
        echo 'メインカラー：',$row['main_color'],'<br>';
        echo '紹介：',$row['outline'],'<br>';
        echo '所属グループ：',$row['group_name'],'<br>';
        echo '配信環境：',$row['environment_name'],'<br>';
        echo '配信URL：',$row['url'],'<br>';
        echo '配信開始日：',$row['live_stday'],'<br>';
        echo '画像パス：',$row['image'],'.jpeg<br><br>';
            echo 'おすすめ動画','<br>';
            $video1 = $row['video1'];
            $video2 = $row['video2'];
            echo '<iframe width="400" height="225" src="', $video1,'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
            echo '　　';
            echo '<iframe width="400" height="225" src="', $video2,'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        }
        echo '<br>';
        echo "\n";
    echo '</div>';
?>
    <form action="menu.php" method="post">
        <input type="submit" class="button" value="メニューに戻る">
    </form>
</body>
</html>