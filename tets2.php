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
<?php
try{
$db =getDb();
$stt = $db->prepare('SELECT * FROM maker WHERE pcmaker = "OMEN(オーメン)" ORDER BY id DESC');
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
</body>
</html>