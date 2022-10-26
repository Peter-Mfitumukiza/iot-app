<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
include('./services.php');
$api = new SensorReadingsService();
switch($requestMethod) {
	case 'GET':	
		print_r($api->getData());
		break;
  case 'POST':
	return $api->insertData($_POST);
	  break;
	default:
	header("HTTP/1.0 405 Method Not Allowed");
	break;
}
?>