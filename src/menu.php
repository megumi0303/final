<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>PHP最終課題</title>
    <style>
    .flex{
        padding:10px 0;
        display:flex;
        justify-content:center;
    }
    .group{
        text-align: center;
        font-size: 15px;
    }
    .text{
        text-align: center;
        font-size: 35px;
    }
    *,
*:before,
*:after {
  -webkit-box-sizing: inherit;
  box-sizing: inherit;
}

html {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 62.5%;
}

.btn,
a.btn,
button.btn {
  font-size: 1.6rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 1rem 4rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #212529;
  border-radius: 0.5rem;
}

a.btn-flat1 {
  overflow: hidden;

  padding: 1.5rem 6rem;

  color: #000;
    border-radius: 20px;
    background: #fff;
}
a.btn-flat2 {
    overflow: hidden;
  
    padding: 1.5rem 6rem;
  
    color: #000;
    border-radius: 20px;
    background: #fff;
}
a.btn-flat3 {
    overflow: hidden;
  
    padding: 1.5rem 6rem;
  
    color: #000;
    border-radius: 20px;
    background: #fff;
}
a.btn-flat4 {
    overflow: hidden;
  
    padding: 1.5rem 6rem;
  
    color: #000;
    border-radius: 20px;
    background: #fff;
}

a.btn-flat1 span {
  position: relative;
}
a.btn-flat2 span {
  position: relative;
}
a.btn-flat3 span {
  position: relative;
}
a.btn-flat4 span {
  position: relative;
}

a.btn-flat1:before {
  position: absolute;
  top: 0;
  left: 0;

  width: 150%;
  height: 500%;

  content: "";
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
  transform: translateX(-98%) translateY(-25%) rotate(45deg);

  background: #6cd1f0;
}
a.btn-flat2:before {
    position: absolute;
    top: 0;
    left: 0;
  
    width: 150%;
    height: 500%;
  
    content: "";
    -webkit-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
    transform: translateX(-98%) translateY(-25%) rotate(45deg);
  
    background: #ede96f;
  }
  a.btn-flat3:before {
    position: absolute;
    top: 0;
    left: 0;
  
    width: 150%;
    height: 500%;
  
    content: "";
    -webkit-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
    transform: translateX(-98%) translateY(-25%) rotate(45deg);
  
    background: #eb6c6c;
  }
  a.btn-flat4:before {
    position: absolute;
    top: 0;
    left: 0;
  
    width: 150%;
    height: 500%;
  
    content: "";
    -webkit-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
    transform: translateX(-98%) translateY(-25%) rotate(45deg);
  
    background: #86eb7f;
  }

a.btn-flat1:hover:before {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);
}
a.btn-flat2:hover:before {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);
}
a.btn-flat3:hover:before {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);
}
a.btn-flat4:hover:before {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);
}
    </style>
</head>
<body>
<div class="text">
推しAmongUs配信者リスト
</div>
<div class="flex">
    <a href="list.php" class="btn btn-flat1"><span>一覧</span></a>
    <a href="insert.php" class="btn btn-flat2"><span>登録</span></a>
    <a href="update.php" class="btn btn-flat3"><span>更新</span></a>
    <a href="delete.php" class="btn btn-flat4"><span>削除</span></a>
</div>
<hr>
<div class="group">
    <h2>主なAmong Us実況グループ</h2>
    <a href="tobiyuni.php"><img alt="image" src="../image/tobiyuni.jpeg" height="200" width="280"></a>
    <a href="oreviva.php"><img alt="image" src="../image/oreviva.jpeg" height="200" width="300"></a>
    <a href="arujan.php"><img alt="image" src="../image/arujan.jpeg" height="200" width="380"></a>
    <a href="takadamura.php"><img alt="image" src="../image/takadamura.jpeg" height="200" width="280"></a>
    <br><br>
    <p>更新機能が正常に動きません。<br>実況グループの画像をクリックすると各グループごとの紹介のページに遷移します。</p>
</div>
</body>
</html>