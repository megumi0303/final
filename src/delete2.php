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
<h1>削除</h1>
<a href="menu.php">メニューに戻る</a>
<hr>
    <table>
        <tr><th>ID</th><th>名前</th><th>誕生日</th><th>年齢</th><th>メインカラー</th><th>紹介</th><th>所属グループ</th><th>配信環境</th><th>初配信日</th><th>配信URL</th><th>画像パス</th></tr>
        <?php
            $pdo=new PDO($connect, USER, PASS);
            $sql=$pdo->prepare('select * from liver join liver_group on liver.group_id = liver_group.group_id join environment on liver.environment_id = environment.environment_id where id=?');
            $sql->execute([$_POST['id']]);
            foreach ($sql as $row) {
                echo '<tr>';
                echo '<form action="delete3.php" method="post">';
                echo '<td>';
                echo '<input type="hidden" name="id" value="', $row['id'], '">';
                echo $row['id'];
                echo '</td> ';
                echo '<td>';
                echo '<input type="hidden" name="name" value="', $row['name'], '">';
                echo $row['name'];
                echo '</td> ';
                echo '<td>';
                echo '<input type="hidden" name="birthday" value="', $row['birthday'], '">';
                echo $row['birthday'];
                echo '</td> ';
                echo '<td>';
                echo '<input type="hidden" name="age" value="', $row['age'], '">';
                echo $row['age'];
                echo '</td> ';
                echo '<td>';
                echo ' <input type="hidden" name="main_color" value="', $row['main_color'], '">';
                echo $row['main_color'];
                echo '</td> ';
                echo '<td>';
                echo ' <input type="hidden" name="outline" value="', $row['outline'], '">';
                echo $row['outline'];
                echo '</td> ';
                echo '<td>';
                echo ' <input type="hidden" name="group_name" value="', $row['group_name'], '">';
                echo $row['group_name'];
                echo '</td> ';
                echo '<td>';
                echo ' <input type="hidden" name="environment_name" value="', $row['environment_name'], '">';
                echo $row['environment_name'];
                echo '</td> ';
                echo '<td>';
                echo '<input type="hidden" name="live_stday" value="', $row['live_stday'], '">';
                echo $row['live_stday'];
                echo '</td> ';
                echo '<td>';
                echo ' <input type="hidden" name="url" value="', $row['url'], '">';
                echo $row['url'];
                echo '</td> ';
                echo '<td>';
                echo ' <input type="hidden" name="image" value="', $row['image'], '">';
                echo $row['image'];
                echo '</td> ';
                echo '<td>';
                echo '<td>',$row['video1'],'</td>';
                echo '</td> ';
                echo '<td>';
                echo '<td>',$row['video2'],'</td>';
                echo '</td> ';
                echo '<td><input type="submit" name="delete" value="削除"></td>';
                echo '</form>';
                echo '</tr>';
                echo "\n";
            }
        ?>
    </table>
    <form action="delete.php" method="post">
        <input type="submit" value="選択画面へ戻る" class="button2">
    </form>
</body>
</html>