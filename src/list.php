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
<title>PHP最終課題</title>
<style>
#column li {
	padding: 10px 10px 20px 30px;
    list-style: none;
    width: 250px;
    overflow: hidden;
    float:left;
    height:400px;
}

#column li a,
#column li a:visited {
	text-decoration: none;
	color: #111;
}

#column li p {
	font-size: 130%;
	margin-bottom: 3px;
}

#column li span {
	font-size: 110%;
	display: block;
}
.column04 li {
	width: calc(25% - 20px);
}
#column img {
  border-radius: 10px;
}
    </style>
</head>
<body>
    <h2>推しAmongUs配信者リスト</h2>
        <?php
            echo '<div id="column" class="column04">';
            echo '<ul>';
            $pdo= new PDO($connect,USER,PASS);
            $sql=$pdo->query('select * from liver');            
            foreach ($sql as $row) {
              $id=$row['id'];
              echo '<li><a href="detail.php?id=', $id, '"><img alt="image" src="../image/', $row['image'], '.jpeg" height="240" width="260">';
              echo '<h3><a href="detail.php?id=', $id, '">', $row['name'], '</a></h3></li>';
            }
            echo '</ul>';
            echo '</div>';
          ?>
</body>
</html>
