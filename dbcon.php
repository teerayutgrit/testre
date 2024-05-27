
<?php
	$serverName = "tcp:assetcontrol.database.windows.net,1433"; 
	$userName = "assetcontrol2023";
	$userPassword = "F8_@ngLe";
	$dbName = "inventory_01";
$connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true,"CharacterSet" => 'UTF-8');
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
die( print_r( sqlsrv_errors(), true));
} 
?>