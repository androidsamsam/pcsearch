<?php
function e(string $str, string $charset = 'UTF-8'){
    return htmlspecialchars($str,ENT_QUOTES|ENT_HTML5,$charset,false);
}