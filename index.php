<?php 
$http_origin = $_SERVER['HTTP_ORIGIN'];

 if ($http_origin == "http://127.0.0.1:51268")
    { 
    header('Access-Control-Allow-Origin: *');
    }

$name = $_GET['name'];

if ($name == "ben"){
	echo "name is ben!";
} else {
	echo "didn't work :(";
}
// header("Content-Type: text/plain;charset=utf-8");
?>
