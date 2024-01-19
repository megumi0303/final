<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="../css/style.css"> 
    <title>PHP最終課題</title>
    <style>
        .explanation{
            font-family: 'Hannotate SC',sans-serif;
            color: #850883;
        }
        .main{
            font-family: 'Hannotate SC',sans-serif;
        }
        body {
            background-image: url("../image/background24.jpeg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
<header>
    <a href="menu.php">
        <img alt="image" src="../image/takadamura.jpeg" height="150" width="260">
    </a>
</header>
<div class="explanation">
<h3>ゲーム実況者「高田健志」が夜な夜な主催するオンラインゲーム「Among Us」コラボ配信の通称。<br>
10〜11人の配信者が集まり、21時から23時まで開催されている。(2023年までは毎週火曜〜日曜)<br>
2024年からは配信スケジュールを変更する。(※変更は以下の通り)</h3>
<h4>毎週　火曜：高田健志主催の人狼ゲーム企画「ガチ人狼」(2024/1/31に始まる)<br>
毎週　水曜：別企画・別ゲーム<br>
毎週　木曜〜日曜：Among Us</h4>
</div>

<?php
echo '<div class="main">';
$url1 = "https://x.com/TKD_PopUpStore?s=20";
$url2 = "https://wikiwiki.jp/takadamura/";
echo '<h3>公式X(Twitter)：<a href="', $url1,'">高田村ポップアップストア公式</a></h3>';
echo '<h5>※高田村は公式X(Twitter)アカウントが存在しない。このアカウントではコラボの決定時などに情報が発信される。</h5>';
echo '<h3>非公式Wiki：<a href="', $url2,'">高田村非公式Wiki</a></h3>';
echo '<h5>※非公式Wikiでは高田村の歴史や名場面、各メンバーの詳細エピソードなどを知ることができます。</h5>';
echo '<h2>メンバー</h2>';
echo '<h5>※画像をクリックすると非公式Wikiに飛びます</h5>';
echo '<img alt="image" src="../image/kenshi.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/shintaro.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/takeo.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/gen.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/fujimiya.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/meiya.png" height="40" width="170"></a>','　';
echo '<br>';
echo '<a href="https://wikiwiki.jp/takadamura/高田健志"><img alt="image" src="../image/kenshi.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/しんたろー"><img alt="image" src="../image/shintaro.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/たけぉ"><img alt="image" src="../image/takeo.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/GEN"><img alt="image" src="../image/gen.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/ふじみや"><img alt="image" src="../image/fujimiya.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/めーや"><img alt="image" src="../image/meiya.jpeg" height="170" width="170"></a>';
echo '<br>';
echo '<img alt="image" src="../image/alma.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/orafu.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/nanako.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/pute.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/haiburi.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/is.png" height="40" width="170"></a>';
echo '<br>';
echo '<a href="https://wikiwiki.jp/takadamura/中野あるま"><img alt="image" src="../image/alma.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/おらふくん"><img alt="image" src="../image/orafu.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/なな湖"><img alt="image" src="../image/nanako.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/プテラたかはし"><img alt="image" src="../image/putehashi.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/HYBRID%20SENSE"><img alt="image" src="../image/haiburi.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/Is"><img alt="image" src="../image/is.jpeg" height="170" width="170"></a>';
echo '<br>';
echo '<img alt="image" src="../image/umeken.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/omaoji.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/gami.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/kudo.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/sakana.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/santos.png" height="40" width="170"></a>','　';
echo '<br>';
echo '<a href="https://wikiwiki.jp/takadamura/うめけん"><img alt="image" src="../image/umeken.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/おまおじ"><img alt="image" src="../image/omaoji.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/がみ"><img alt="image" src="../image/gami.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/くどう丸"><img alt="image" src="../image/kudo.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/さかな"><img alt="image" src="../image/sakana.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/サントス"><img alt="image" src="../image/santos.jpeg" height="170" width="170"></a>';
echo '<br>';
echo '<img alt="image" src="../image/nero.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/hatasako.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/totas.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/k.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/sunapai.png" height="40" width="170"></a>','　';
echo '<img alt="image" src="../image/akameta.png" height="40" width="170"></a>','　';
echo '<br>';
echo '<a href="https://wikiwiki.jp/takadamura/ねろちゃん"><img alt="image" src="../image/nerrr.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/はたさこ"><img alt="image" src="../image/hatasako.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/桃＋"><img alt="image" src="../image/totas.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/羊飼いK"><img alt="image" src="../image/k.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/スナパイ"><img alt="image" src="../image/sunapai.jpeg" height="170" width="170"></a>','　';
echo '<a href="https://wikiwiki.jp/takadamura/アカメタクヤ"><img alt="image" src="../image/akameta.jpeg" height="170" width="170"></a>';
echo '<h2>大型企画・イベント</h2>';
echo '<h3>高田村バトルロワイアル</h3>';
echo '<h4>2021年から年に1回開催されているバトロワ。FPSゲーム「PUBG」を使用する。</h4>';
$url1 = "https://wikiwiki.jp/takadamura/高田村バトルロワイアル";
$url2 = "https://wikiwiki.jp/takadamura/高田村バトルロワイアル2";
$url3 = "";
echo '<h3><a href="', $url1,'">2021年12月29日開催　第1回高田村バトルロワイアル</a></h3>';
echo '<h3><a href="', $url2,'">2022年12月30日開催　第2回高田村バトルロワイアル</a></h3>';
echo '<h3>2023年12月29日開催　第3回高田村バトルロワイアル</h3>';
echo '<h2>歌ってみた</h2>';
echo '<h3>ドズル社コラボ</h3>';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/oYAEASDt1d8?si=lyyH5oUiVyXSSdWH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '　　';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/fv41PtOcksA?si=w4mSEvoz_abmgngg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '</div>';
?>
</body>
</html>