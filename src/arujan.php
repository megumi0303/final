<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="../css/style.css"> 
    <title>PHP最終課題</title>
    <style>
        .explanation{
            font-family: 'Hannotate SC',sans-serif;
            color: #064a28;
        }
        .main{
            font-family: 'Hannotate SC',sans-serif;
        }
        body {
            background-image: url("../image/background22.jpeg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
<header>
    <a href="menu.php">
        <img alt="image" src="../image/arujan.jpeg" height="200" width="400">
    </a>
</header>
<div class="explanation">
<h3>略してアルジャン！<br>
宇宙人狼ゲーム「Among Us」においてハッチャンとポン酢野郎が共同主催を務めるコラボ配信の通称。<br>
アルジャンでは「Better Crew Link」というMODを導入し、「近くの人と話せるAmong Us(通称近アモ)」を開催している。<br>
通常の役職に加え、さまざまな役職を追加して遊んでいる。<br>
定期活動：毎週 月・火・木・金 21時〜23時ごろまで</h3>
</div>

<?php
echo '<div class="main">';
$url1 = "https://wikiwiki.jp/arujan/%E4%BB%8A%E3%81%BE%E3%81%A7%E4%BD%BF%E7%94%A8%E3%81%97%E3%81%9F%E5%BD%B9%E8%81%B7%E4%B8%80%E8%A6%A7";
$url2 = "https://x.com/arujan_official?s=20";
$url3 = "https://arujan-store.com/";
$url4 = "https://wikiwiki.jp/arujan/";
echo '<h4>特殊役職一覧：<a href="', $url1,'">今まで使用してきた特殊役職</a></h4>';
echo '<h3>公式X(Twitter)アカウント：<a href="', $url2,'">アルティメットジャンボジェット【アルジャン】</a></h3>';
echo '<h3>アルジャン　オンラインストア：<a href="', $url3,'">オンラインストア</a></h3>';
echo '<h3>非公式Wiki：<a href="', $url4,'">アルジャン非公式Wiki</a></h3>';
echo '<h5>※非公式Wikiでは各メンバーの詳細エピソードや過去に開催されたイベントや企画などを知ることができます。</h5>';
echo '<h2>メインメンバー</h2>';
echo '<h5>※画像をクリックすると非公式Wikiに飛びます</h5>';
echo '<img alt="image" src="../image/hachi.jpeg" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/ponzu.jpeg" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/asahi.jpeg" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/pyon.jpeg" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/misato.jpeg" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/bubble.jpeg" height="40" width="170"></a>','　';
echo '<br>';
echo '<a href="https://wikiwiki.jp/arujan/ハッチャン"><img alt="image" src="../image/hachi.png" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/arujan/ポン酢野郎"><img alt="image" src="../image/ponzu.png" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/arujan/瀬戸あさひ"><img alt="image" src="../image/asahi.png" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/arujan/なつぴょん"><img alt="image" src="../image/pyon.png" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/arujan/みさとらん"><img alt="image" src="../image/misato.png" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/arujan/バブルケーキ"><img alt="image" src="../image/bubble.png" height="170" width="170"></a>','　';
echo '<br>';
echo '<img alt="image" src="../image/takeo.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/shijin.jpeg" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/chage.jpeg" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/mei.jpeg" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/mansaya.jpeg" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/tossin.jpeg" height="40" width="170"></a>','　';
echo '<br>';
echo '<a href="https://wikiwiki.jp/arujan/たけぉ"><img alt="image" src="../image/takeo.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/arujan/詩人さん"><img alt="image" src="../image/shijin.png" height="170" width="170"></a>','　';
echo '<a href=https://wikiwiki.jp/arujan/ちゃげぽよ。"><img alt="image" src="../image/chage.png" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/arujan/比良坂芽衣"><img alt="image" src="../image/mei.png" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/arujan/まんさや"><img alt="image" src="../image/mansaya.png" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/arujan/とっしん"><img alt="image" src="../image/tossin.png" height="170" width="170"></a>','　';
echo '<h3>この他にもさまざまなメンバーが参加している</h3>';
echo '</div>';
?>
</body>
</html>