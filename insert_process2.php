<?php
require_once'/Applications/MAMP/htdocs/Dbssk.php';
try{
    $db = getDb();
    $stt = $db->prepare('INSERT INTO spec(code,cpu,gpu,memory,os)VALUES(:code,:cpu,:gpu,:memory,:os)');
    $stt->bindValue(':code', $_POST['code']);
    $stt->bindValue(':cpu', $_POST['cpu']);
    $stt->bindValue(':gpu', $_POST['gpu']);
    $stt->bindValue(':memory', $_POST['memory']);
    $stt->bindValue(':os', $_POST['os']);
    $stt->execute();
    header('Location: http://'.$SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/junjun_form2.php');
}catch(PDOException $e){
 die("エラーメッセージ:{$e->getMessage()}");
}