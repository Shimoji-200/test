<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson02;host=localhost;","root","mysql");
$stmt = $pdo->query("select * from 4each_keijiban");

?>
 
<img src="4eachblog_logo.jpg">
 <header>   
<li>
<ul>トップ</ul>
<ul>プロフィール</ul>
<ul>4eachについて</ul>
<ul>登録フォーム</ul>
<ul>問い合わせ</ul>
<ul>その他</ul>
</li>
    </header>
    <h2>プログラミングに役立つ掲示板</h2>
    
    <div class="left">  <h3>入力フォーム</h3>
        <form method="post"action="insert.php">
    <div>
    <label>ハンドルネーム</label>
        <br>
        <input type="text"class="text"name="handlename"size="40">
        </div>
  <div>
    <label>タイトル</label>
    <br>
    <input type="text"class="text"name="title"size="40">
        </div>
    <br>
<div>
    <label>コメント</label>
    <br>
    <textarea cols="35"rows="7"name="comments"></textarea>
        </div>
    <div>
<input type="submit" class="submit" value="投稿する">
            </div></form></div>

    <div class="right"> <h4>人気の記事</h4>
      <li>
        <ul>phpオススメ本</ul>
        <ul>ｐｈｐ　myadminの使い方</ul>
        <ul>今人気のエディタ　トップ5</ul>
        <ul>htmlの基本</ul></li>
        
        <h4>オススメリンク</h4>
        <li>
            <ul>インターノウス株式会社</ul>
        <ul>XAMPPのダウンロード</ul>
        <ul>Ｅｃｌｉｐｓｅのダウンロード</ul>
        <ul>hＢｒａｃｋｅｔｓのダウンロード</ul>
            </li>
        <h4>カテゴリ</h4>
        <li>
            <ul>HTML</ul>
        <ul>PHP</ul>
        <ul>MySQL</ul>
        <ul>javascript</ul>
        </li></div>  
<!--
<?php
echo"<div class='box1'>";
echo"<h3>タイトル</h3>";
echo"記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
記事の中身。記事の中身。記事の中身。記事の中身。<br>
記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>";

echo"<div class='handlename'>posted by 通りすがり</div>";
echo"</div>";
echo"<div class='contents'>";


echo"</div>";
?>   
-->
   <?php
    while($row=$stmt->fetch()){
    echo"<div class='box1'>";
    echo"<h3>".$row['title']."</h3>";
    echo"<div class='contents'>";
    echo $row['comments'];
    echo"<div class='handlename'>posted by".$row['handlename']."</div>";
    echo"</div>";
    echo"</div>";
    }
?>
</body>
</html>