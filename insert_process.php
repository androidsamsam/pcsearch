<?php
require_once'/Applications/MAMP/htdocs/Dbssk.php';
try{
    $db = getDb();
    $stt = $db->prepare('INSERT INTO maker(code,product,maker,price,campaign)VALUES(:code,:product,:maker,:price,:campaign)');
    $stt->bindValue(':code', $_POST['code']);
    $stt->bindValue(':product', $_POST['product']);
    $stt->bindValue(':maker', $_POST['maker']);
    $stt->bindValue(':price', $_POST['price']);
    $stt->bindValue(':campaign', $_POST['campaign']);
    $stt->execute();
    header('Location: http://'.$SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/junjun_form.php');
}catch(PDOException $e){
 die("エラーメッセージ:{$e->getMessage()}");
}