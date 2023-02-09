<?php
require_once'/Applications/MAMP/htdocs/DbManager.php';

$db = getDb();
$db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_SILENT);
$db->exec('MECHA KUCHA');
if ($db->errorcode() !=='00000'){
    $info = $db->errorInfo();
    print "エラーコード:{$info[0]} <br />";
    print "エラーコード(ドライバー) : {$info[1]} <br />";
    print "エラーメッセージ : {$info[2]}";
}