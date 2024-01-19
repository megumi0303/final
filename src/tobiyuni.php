<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="../css/style.css"> 
    <title>PHP最終課題</title>
    <style>
        .explanation{
            font-family: 'Hannotate SC',sans-serif;
            color: #e6eafc;
        }
        .main{
            font-family: 'Hannotate SC',sans-serif;
            color: #e6dcf2;
        }
        body {
            background-image: url("../image/background19.jpeg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        a{
            color: #a4caf5;
        }
    </style>
</head>
<body>
<header>
    <a href="menu.php">
        <img alt="image" src="../image/tobiyuni.jpeg" height="180" width="320">
    </a>
</header>
<div class="explanation">
<h3>略してとびユニ！<br>
宇宙人狼ゲーム『Among Us』を中心に様々なゲームで遊んでいるゲーム実況者12名の集まり。<br>
定期配信では各メンバーがMCを担当して持ち寄ったゲームで遊んでいる。<br>
TRPGや26時間リレー配信といった大型企画も開催している。</h3>
<h4>定期活動：毎週 日・火・木 18～20時</h4>
</div>

<?php
echo '<div class="main">';
$url1 = "https://www.youtube.com/@TobidaseUniverse0117";
$url2 = "https://x.com/tobiuni117?s=20";
$url3 = "https://twitter.com/tobiuni_station?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor";
$url4 = "https://www.tiktok.com/@tobiuni?is_from_webapp=1&sender_device=pc";
$url5 = "https://wikiwiki.jp/tobiyuni/";
echo '<h3>YouTube公式チャンネル：<a href="', $url1,'">【とびユニ】とびだせユニバース公式チャンネル</a></h3>';
echo '<h3>公式X(Twitter)アカウント：<a href="', $url2,'">とびだせユニバース【とびユニ】</a></h3>';
echo '<h3>『とびユニステーション』公式アカウント：<a href="', $url3,'">『とびユニステーション』</a></h3>';
echo '<h4>東京都渋谷区のMAGNET by SHIBUYA109 2Fに『とびユニステーション』の常設店があります</h4>';
echo '<h3>公式TikTokアカウント：<a href="', $url4,'">【とびユニ】とびだせユニバースTikTok</a></h3>';
echo '<h3>非公式Wiki：<a href="', $url5,'">とびユニ非公式Wiki</a></h3>';
echo '<h5>※非公式Wikiでは各メンバーの詳細エピソードや過去にとびユニ内で行なったゲームや企画などを知ることができます。</h5>';
echo '<h2>メンバー</h2>';
echo '<h5>※画像をクリックすると非公式Wikiに飛びます</h5>';
echo '<a href="https://wikiwiki.jp/tobiyuni/サクヤ"><img alt="image" src="../image/sky_circle.png" height="170" width="170">';
echo '<a href="https://wikiwiki.jp/tobiyuni/天羽よつは"><img alt="image" src="../image/yth_circle.png" height="170" width="170">';
echo '<a href="https://wikiwiki.jp/tobiyuni/kaki"><img alt="image" src="../image/kk_circle.png" height="170" width="170">';
echo '<a href="https://wikiwiki.jp/tobiyuni/かげまる"><img alt="image" src="../image/kgmr_circle.png" height="170" width="170">';
echo '<a href="https://wikiwiki.jp/tobiyuni/栗山やんみ"><img alt="image" src="../image/ynm_circle.png" height="170" width="170">';
echo '<a href="https://wikiwiki.jp/tobiyuni/しんたろー"><img alt="image" src="../image/sntr_circle.png" height="170" width="170">';
echo '<br>';
echo '<a href="https://wikiwiki.jp/tobiyuni/たけぉ"><img alt="image" src="../image/tko_circle.png" height="170" width="170"></a>';
echo '<a href="https://wikiwiki.jp/tobiyuni/テラゾー"><img alt="image" src="../image/trz_circle.png" height="170" width="170"></a>';
echo '<a href=https://wikiwiki.jp/tobiyuni/のすけ"><img alt="image" src="../image/nsk_circle.png" height="170" width="170"></a>';
echo '<a href="https://wikiwiki.jp/tobiyuni/はたさこ"><img alt="image" src="../image/htsk_circle.png" height="170" width="170"></a>';
echo '<a href="https://wikiwiki.jp/tobiyuni/ふじみや"><img alt="image" src="../image/fjmy_circle.png" height="170" width="170"></a>';
echo '<a href="https://wikiwiki.jp/tobiyuni/ライト"><img alt="image" src="../image/lit_circle.png" height="170" width="170"></a>';
echo '<h2>歌ってみた</h2>';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/G1zrQ-HIma0?si=OLn9Vj45Lmi3ybJc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '　　';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/Ln-Gai0NkXA?si=NuxRZUsYckytydkJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '　　';
echo '<iframe width="410" height="265" src="https://www.youtube.com/embed/DqEkwLW0DkY?si=U7rsl3Ajc5AeswwQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
echo '</div>';
?>
</body>
</html>