<?php
function getDb() : PDO{
    $dsn = 'mysql:dbname=ssk; host=127.0.0.1; port=3306; charset=utf8';
    $usr = 'root';
    $passwd ='root';
    $db = new PDO($dsn,$usr,$passwd,[PDO::ATTR_PERSISTENT => true]);
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    return $db;
}