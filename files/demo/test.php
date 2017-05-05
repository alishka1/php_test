<?php
// $dir = opendir(".");
// while ($name = readdir($dir)){
// 	if($name == "." or $name == "..")
// 		continue;
// 	if(is_dir($name)) 
// 		echo '[' . $name . ']<br>';
// 	else
// 		echo $name . '<br>';
// }
// closedir($dir); 

$to = "ali.alekperov1408@gmail.com";
$subject = "Test";
$body = "I'm sending the letter to Vasya";

if( mail($to, $subject, $body))
	echo "The lettet was send";
else
	echo "There is a problem";

mail($to, $subject, $body);