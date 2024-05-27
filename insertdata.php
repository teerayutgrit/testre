<?php
include("dbcon.php");

date_default_timezone_set('Asia/Bangkok');

$date1 = $_POST["date1"];
$date_rc = date("Y-m-d");
$time_rc = date("h:i:sa");
$mt_name = $_POST["mt_name"];
$waterlevel_boiler = $_POST["waterlevel_boiler"];
$id_fan = $_POST["id_fan"];
$fd_fan = $_POST["fd_fan"];
$gear_box = $_POST["gear_box"];
$furnace_temp = $_POST["furnace_temp"];
$steam_pressure = $_POST["steam_pressure"];
$exhaust_temp = $_POST["exhaust_temp"];
$waterlevel_tank = $_POST["waterlevel_tank"];
$deaerator_level = $_POST["deaerator_level"];
$deaerator_temp = $_POST["deaerator_temp"];
$tunneltemp_left = $_POST["tunneltemp_left"];
$tunneltemp_right = $_POST["tunneltemp_right"];
$economizer_temp = $_POST["economizer_temp"];
$water_meter = $_POST["water_meter"];
$fuel_amount = $_POST["fuel_amount"];
$mt_comment = $_POST["mt_comment"];
$date_sl = $_POST["date_sl"];


$sql = "INSERT INTO mt_check (date1, waterlevel_boiler,date_rc,time_rc,mt_name,id_fan,fd_fan,gear_box
,furnace_temp,steam_pressure,exhaust_temp,waterlevel_tank,deaerator_level,deaerator_temp,tunneltemp_left,tunneltemp_right
,economizer_temp,water_meter,fuel_amount,mt_comment,date_sl) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$params = array($date1, $waterlevel_boiler,$date_rc ,$time_rc,$mt_name,$id_fan,$fd_fan,$gear_box
,$furnace_temp,$steam_pressure,$exhaust_temp,$waterlevel_tank,$deaerator_level,$deaerator_temp,$tunneltemp_left
,$tunneltemp_right,$economizer_temp,$water_meter,$fuel_amount,$mt_comment,$date_sl  );

$stmt = sqlsrv_query($conn, $sql, $params);


if ($stmt === false) {
  echo "Error in executing statement.\n";
  die(print_r(sqlsrv_errors(), true));
} else {
  echo "<script> alert('Saved'); window.location='index.php';</script>";
}

sqlsrv_close($conn);
if ($chkstatus == "OK") {

}

?>