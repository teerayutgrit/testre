<?php
include("dbcon.php");


date_default_timezone_set('Asia/Bangkok');

$params = array();

$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);


$reqid01= $_POST["Product_Code"];
// $reason= $_POST["reason"];
// $time_rc = date("h:i:sa");
// $mt_name = $_POST["mt_name"];
// $waterlevel_boiler = $_POST["waterlevel_boiler"];
// $id_fan = $_POST["id_fan"];
// $fd_fan = $_POST["fd_fan"];
// $gear_box = $_POST["gear_box"];
// $furnace_temp = $_POST["furnace_temp"];
// $steam_pressure = $_POST["steam_pressure"];
$Quantity = $_POST["Quantity"];
$Pcs = $_POST["Pcs"];

$sql = "UPDATE BKP_WH_15 SET Quantity = '$Quantity', Pcs='$Pcs', WHERE Product_Code = '$reqid01' ";

$stmt = sqlsrv_prepare($conn, $sql, $params);

if (sqlsrv_execute($stmt)) {

    $chkstatus = "OK";

    echo "<script> alert('Saved'); window.location='index.php';</script>"; 
   } else {
    $chkstatus = "FAIL";

    echo "Error: " . $stmt;
}

sqlsrv_close($conn);


?>
