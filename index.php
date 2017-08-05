<?php 
header("Content-Type: text/plain;charset=utf-8");
$http_origin = $_SERVER['HTTP_ORIGIN'];

if ($http_origin == "http://127.0.0.1:51268")
    { 
    header('Access-Control-Allow-Origin: *');
    }

$name = $_POST['name'];

if ($name == "ben"){
	echo "name is ben!";
} else {
	echo "didn't work :(";
}

?>
