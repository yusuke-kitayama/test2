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
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
$stmt = $pdo->query("select * from 4each_keijiban");

?>
    
    
<header>
  <div class="logo"> <img src="4eachblog_logo.jpg"></div>
  <div class="menue">
  
  <ul>
   <li><a href="http://localhost/HP/index.html">トップ</a></li>
   <li>プロフィール</li>
   <li>4eachについて</li>
   <li>登録フォーム</li>
   <li><a href="http://localhost/contactform/index.html">問い合わせ</a></li>
   <li>その他</li>
  </ul>

  </div>

</header>
    
<main>
    
<div class="main-container">

 <div class="maintext">
     <h2>プログラミングに役立つ掲示板</h2>  
     
     <div class="comfirm">

         
         <form method="post" action="insert.php">
             <h3>入力フォーム</h3>
    
<div>
<label>ハンドルネーム</label>
<br>
<input type="text" class="text" size="35" name="handlename">
</div>

<div>
<label>タイトル</label>
<br>
<input type="text" class="text" size="35" name="title">
</div>
    
<div>
<label>コメント</label>
<br>
<textarea cols="50" rows="7" name="comments"></textarea>
</div>

<div>
<input type="submit" class="submit" value="投稿する">
</div>

         </form>
     </div><br>
     
 <body>
     
     <?php
while ($row = $stmt->fetch()) {
echo "<div class='kiji'>";
echo "<h3>".$row['title']."</h3>";
echo "<div class='contents'>";
echo $row['comments'];
echo "<div class='handlename'>posted by".$row['handlename']."</div>";
echo "</div>";
echo "</div><br>";
}
?>

     
</div>
     
     <br><br>
     <div class="menue">
         

<h3>人気の記事</h3>

PHP オススメ本　<br>
PHP MyAdminの使い方 <br>
今人気のエディタ Top5 <br>
HTMLの基礎 <br>

<h3>オススメリンク</h3>

<a href="https://www.internous.co.jp/">インターノウス株式会社</a> <br>
XAMPPのダウンロード <br>
Eclipseのダウンロード <br>
Brackersのダウンロード <br>

<h3>カテゴリ</h3>

HTML <br>
PHP <br>
MySQL <br>
JavaScript <br>
 </div>
    </div>
    
   


 </main>


 <footer>
copyright © internous | 4each blog is the one which porovides A to Z about programing.
 </footer>

    
</body>

</html>