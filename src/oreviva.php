<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="../css/style.css"> 
    <title>PHP最終課題</title>
    <style>
        .explanation{
            font-family: 'Hannotate SC',sans-serif;
            color: #8c0f01;
        }
        .main{
            font-family: 'Hannotate SC',sans-serif;
        }
        body {
            background-image: url("../image/background20.jpeg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
<header>
    <a href="menu.php">
    <img alt="image" src="../image/oreviva.jpeg" height="200" width="350">
    </a>
</header>
<div class="explanation">
<h3>略してオレビバ！<br>
宇宙人狼ゲーム「Among Us」で知り合ったメンバーたちをプテラたかはしが中心となって集めたゲーム実況者4名の集まり。<br>
活動内容としては、4人での定期的なコラボ配信や各企画へのオレビバチームとしての参加、歌ってみた動画を投稿するなど多岐に渡る。<br>
リスナーや他配信者からはオレビバやビバなどの愛称で親しまれている。</h3>
</div>

<?php
echo '<div class="main">';
$url1 = "https://www.youtube.com/@oreviva926";
$url2 = "https://x.com/OREVIVA926?s=20";
$url3 = "https://w.atwiki.jp/ore_viva/";
echo '<h3>YouTube公式チャンネル：<a href="', $url1,'">【公式】オレ達の遊ビバ！</a></h3>';
echo '<h3>公式X(Twitter)アカウント：<a href="', $url2,'">オレ達の遊ビバ！【オレビバ！】</a></h3>';
echo '<h3>非公式Wiki：<a href="', $url3,'">オレビバ非公式Wiki</a></h3>';
echo '<h5>※非公式Wikiでは各メンバーの詳細エピソードや過去に配信した歌ってみたなどを知ることができます。</h5>';
echo '<h2>メンバー</h2>';
echo '<h5>※画像をクリックすると非公式Wikiに飛びます</h5>';
echo '<img alt="image" src="../image/pute.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/meiya.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/nero.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/ave.png" height="40" width="170"></a>','　';
echo '<br>';
echo '<a href="https://w.atwiki.jp/ore_viva/pages/10.html"><img alt="image" src="../image/putehashi.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://w.atwiki.jp/ore_viva/pages/11.html"><img alt="image" src="../image/meiya.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://w.atwiki.jp/ore_viva/pages/12.html"><img alt="image" src="../image/nerrr.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://w.atwiki.jp/ore_viva/pages/13.html"><img alt="image" src="../image/average.jpeg" height="170" width="170"></a>';
echo '<h2>歌ってみた</h2>';
echo '<h4>オレビバ！は2024年1月現在10曲のカバー曲と3曲のオリジナル曲を配信している。</h4>';
echo '<h3>カバー曲おすすめ</h3>';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/8j97jIwOK5M?si=4HnBneaYHAA6YHFe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '　　';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/xZkHKu5F-ZA?si=E5dKdmYcPRzbyDhn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '　　';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/Fs8tme1YAZA?si=w6bjW8018l3hanE9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '<h3>オリジナル曲</h3>';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/1Yj-wxAcUpk?si=1H4HJJCNmCwM4295" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '　　';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/bFsV51GjcWY?si=-JFVsID5dE2up09O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '　　';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/-4CuHlUWTJ8?si=tcn6IYZVy7IiSXTR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '</div>';
?>
</body>
</html>