<?php
include "RestClass.php";



//if(isset($_GET["parameter"]))
try {
	$got = $_GET["parameter"];
	switch ($got) {
	case 'all':
		$obj = new Restclass();
		echo json_encode($obj->getall(),JSON_PRETTY_PRINT);
		break;
	case 'number':
		$obj = new Restclass();
		echo $obj->getbynumber($_GET["number"]);
		break;
	default:
		throw new Exception('Division by zero.');
		break;
}
} catch (Exception $e) {
	header("HTTP/1.1 500 NotOK");
	echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>