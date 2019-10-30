<?php

 header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
 header('Access-Control-Allow-Credentials: true');

 if (True){
	echo "this data valid for logged in users.";
}
?>

