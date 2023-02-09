<?php
$dsn = 'mysql:dbname=junjun; host=127.0.0.1;port=8889;charset=utf8';
$usr = 'root';
$passwd ='root';

try{
    $db = new PDO($dsn,$usr,$passwd);
    print '接続成功';
}catch (PDOException $e){
    die("接続エラー:{$e->getMessage()}");
}finally{
    $db = null;
}