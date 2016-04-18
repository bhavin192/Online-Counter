<?php
$db = fopen("count.txt", "r");
$str = fread($db, filesize("count.txt"));
fclose($db);
$file = fopen("count.txt", "w");
if(($str-1) != 0){
fwrite($file, $str-1);}
fclose($file);
?>