<?php
require_once'/Applications/MAMP/htdocs/Dbssk.php';
require_once'/Applications/MAMP/htdocs/Encode.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8" />
<title>表示画面</title>
<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body>
<form method="post" action="">
<input type="radio" name="q1" value= "OMEN(オーメン)" checked> OMEN
<input type="radio" name="q1" value="radiofronter"> FRONTIER
<input type="radio" name="q1" value="radioalienware"> Alienware
</p>
<p><input type="submit" value="送信する"></p>
<?php
try{
$db =getDb();
$stt = $db->prepare('SELECT * FROM maker WHERE pcmaker = "q1" ORDER BY id DESC');
$stt->execute();
while($row = $stt->fetch(PDO::FETCH_ASSOC)){
?>
<div class = wrapper>
<?=e($row['pcmaker']) ?>
<?=e($row['product']) ?>
<?=e($row['price']) ?>
<?=e($row['campaign']) ?>
</div>
<?php
}
}catch(PDOException $e){
    die("エラーメッセージ:{$e->getMessage()}");
}
?>

</form>





