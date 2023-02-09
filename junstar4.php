<?php
require_once'/Applications/MAMP/htdocs/Dbssk.php';
    $db = getDb();
    $db->setAttribute(PDO::ATTR_CASE,PDO::CASE_UPPER);
    print_r($db->query('SELECT*FROM pcmember')->fetchAll(PDO::FETCH_ASSOC));