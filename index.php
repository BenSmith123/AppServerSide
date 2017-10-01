<?php 
//header("Content-Type: text/plain;charset=utf-8");

//phpinfo();

// stop this file from being cached
// (otherwise updating this file won't change for any device already connected)
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

// allow any connection to be made - hopefully avoids being blocked by firewalls etc
$http_origin = $_SERVER['HTTP_ORIGIN'];
if ($http_origin == "http://127.0.0.1:51268") { 
	header('Access-Control-Allow-Origin: *');
}


$name = $_POST['name']; // inside post is the name of the variable being sent (client side)

// process content on server

if ($name == "ben"){
	echo "Welcome to Electroball! " . $name;
} else {
	echo "Either server processing issue or connection" . $name;
}

?>
