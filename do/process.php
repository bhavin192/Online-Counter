<?php

$db = fopen("count.txt", "r");
$str = fread($db, filesize("count.txt"));
echo  $str ;
fclose($db);
?>