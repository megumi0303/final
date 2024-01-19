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
        .main{
            font-size: 22px;
        }
        .button1 {
            display: block;
            text-align: center;
            vertical-align: middle;
            /* text-decoration: none; */
            height: 50px;
            width: 120px;
            /* padding: 1rem 4rem; */
            font-weight: bold;
            border: 2px solid #14960b;
            color: #14960b;
            border-radius: 100vh;
            transition: 0.5s;
        }
        .button1:hover {
            color: #fff;
            background: #86eb7f;
        }
        .button2 {
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
        .button2:hover {
            color: #fff;
            background: #eb95f5;
        }
        .btn{
            display: flex;
            justify-content: left;
        }

    </style>
</head>
<body>
<h1>削除</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
    <?php
        echo '<div class="main">';
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
        $sql->execute([$_POST['id']]);
        foreach ($sql as $row) {
            echo '名前：',$row['name'],'<br>';
            echo '誕生日：',$row['birthday'],'<br>';
            echo '年齢：',$row['age'],'歳<br>';
            echo 'メインカラー：',$row['main_color'],'<br>';
            echo '紹介：',$row['outline'],'<br>';
            echo '所属グループ：',$row['group_name'],'<br>';
            echo '配信環境：',$row['environment_name'],'<br>';
            echo '配信URL：',$row['url'],'<br>';
            echo '初配信日：',$row['live_stday'],'<br>';
            echo '画像パス：',$row['image'],'.jpeg<br><br>';
            if(!($row['video1'] || $row['video2'] == "")){
                echo 'おすすめ動画','<br>';
                $video1 = $row['video1'];
                $video2 = $row['video2'];
                echo '<iframe width="400" height="225" src="', $video1,'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                echo '　　';
                echo '<iframe width="400" height="225" src="', $video2,'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
            }
            echo "\n";
        }
        echo '</div>';
?>
<div class="btn">
    <input type="button" class="button2" onclick="location.href='delete.php'" value="戻る">
    <?php
    echo '<form action="delete3.php" method="post">';
    echo '<input type="hidden" name="id" value="',$row['id'],'">';
    echo '<button type="submit" class="button1">削除</button><br>';
    echo '</form>';
    ?>
    <!-- <input type="button" class="button1" onclick="location.href='delete3.php'" value="削除"> -->
</div>
</body>
</html>