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
        .example{
            color: red;
            font-size: 25px;
        }
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
    </style>
</head>
<body>
<h1>更新</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
<?php
    echo '<div class="example">';
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('update liver set name=?,birthday=?,age=?,main_color=?,outline=?,group_id=?,environment_id=?,url=?,live_stday=?,image=?,video1=?,video2=? where id=?');
    if(empty($_POST['name'])){
        echo '名前を入力してください';
        echo '<br><br>';
    }else if(empty($_POST['main_color'])){
        echo 'メインカラーを入力してください';
        echo '<br><br>';
    }else if(empty($_POST['outline'])){
        echo '紹介文を入力してください';
        echo '<br><br>';
    }else if(empty($_POST['url'])){
        echo 'URLを入力してください';
        echo '<br><br>';
    }else if(empty($_POST['image'])){
        echo '画像パスを入力してください';
        echo '<br><br>';
    }else if($sql->execute([$_POST['name'],$_POST['birthday'],$_POST['age'],$_POST['main_color'],$_POST['outline'],$_POST['group_id'],$_POST['environment_id'],$_POST['url'],$_POST['live_stday'],$_POST['image'],$_POST['video1'],$_POST['video2'],$_POST['id']])){
        echo '更新が完了しました';
        echo '<br><br>';
    }else{
        echo '更新に失敗しました';
        echo '<br><br>';
    }
    echo '</div>';
?>
<?php
    echo '<div class="main">';
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
    $sql->execute([$_POST['id']]);
    foreach($sql as $row){
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
        $video1 = $row['video1'];
        $video2 = $row['video2'];
        echo '<iframe width="300" height="175" src="', $video1,'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        echo '　';
        echo '<iframe width="300" height="175" src="', $video2,'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        echo "\n";
    }
    echo '</div>';
?>
<form action="update.php" method="post">
    <input type="submit" value="戻る" class="button">
</form>
</body>
</html>