<?php
require_once'/Applications/MAMP/htdocs/Dbssk.php';
try{
    $db = getDb();
    $stt = $db->prepare('SELECT * FROM  maker WHERE maker === radiradi' );
    $stt->execute();
    header('Location: http://'.$SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/test2.php');
}catch(PDOException $e){
 die("エラーメッセージ:{$e->getMessage()}");
}