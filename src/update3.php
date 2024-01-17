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
</head>
<body>
<h1>更新</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('update liver set name=?,birthday=?,age=?,main_color=?,outline=?,group_id=?,environment_id=?,url=?,live_stday=?,image=? where id=?');
    if(empty($_POST['name'])){
        echo '名前を入力してください';
    }else if(empty($_POST['main_color'])){
        echo 'メインカラーを入力してください';
    }else if(empty($_POST['outline'])){
        echo '紹介文を入力してください';
    }else if(strlen($_POST['outline']) > 50){
        echo '紹介文を50文字以内で入力してください';
    }else if(empty($_POST['url'])){
        echo 'URLを入力してください';
    }else if(empty($_POST['image'])){
        echo '画像パスを入力してください';
    }else if($sql->execute([$_POST['name'],$_POST['birthday'],$_POST['age'],$_POST['main_color'],$_POST['outline'],$_POST['group_id'],$_POST['environment_id'],$_POST['url'],$_POST['live_stday'],$_POST['image'],$_POST['id']])){
        echo '更新が完了しました';
    }else{
        echo '更新に失敗しました';
    }
?>
    <table>
        <tr><th>名前</th><th>誕生日</th><th>年齢</th><th>メインカラー</th><th>紹介</th><th>所属グループ</th><th>配信環境</th><th>初配信日</th><th>配信URL</th><th>画像パス</th><th>おすすめ動画1</th><th>おすすめ動画2</th></tr>
        <?php
            $pdo=new PDO($connect, USER, PASS);
            $sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
            $sql->execute([$_POST['id']]);
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
        ?>
    </table>
    <form action="update.php" method="post">
        <input type="submit" value="選択画面へ戻る" class="button2">
    </form>
</body>
</html>