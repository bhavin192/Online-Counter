<?php
$db = fopen("count.txt", "r");
$str = fread($db, filesize("count.txt"));
fclose($db);
if($str == 30){
	echo "Entries full !!! Good Job!";
}else{
$file = fopen("count.txt", "w");
fwrite($file, $str+1);
fclose($file);}
?>