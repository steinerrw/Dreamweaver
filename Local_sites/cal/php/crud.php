<?php
require_once("connect.php");
function sanitize($data)  
{  
	if(get_magic_quotes_gpc())   
		$data = stripslashes($data);  
	$data = mysql_real_escape_string($data);  
	return $data;  
}
$vDatabase = $_POST["vDatabase"];
$vTable = $_POST["vTable"];
$vType = $_POST["vType"];
$vDate = sanitize($_POST["vDate"]);
$vTime = sanitize($_POST["vTime"]);
$vTitle = sanitize($_POST["vTitle"]);
$vRecord = sanitize($_POST["vRecord"]);
$vDesc = sanitize($_POST["vDesc"]);
switch ($vType) {
    case "Create":
        $Query = "INSERT INTO `" . $vDatabase . "`.`" . $vTable . "` (
		`date` ,
		`time` ,
		`title` ,
		`description`
		)
		VALUES (
		'$vDate', '$vTime', '$vTitle', '$vDesc'
		)";
        break;
    case "Update":
        $Query = "UPDATE `" . $vDatabase . "`.`" . $vTable . "` SET 
		`title` = '$vTitle',
		`time` = '$vTime',
		`description` = '$vDesc'
		WHERE
		`" . $vTable . "`.`date` = '$vDate' AND `". $vTable . "`.`id` = '$vRecord';
		";
        break;
    case "Delete":
        $Query = "DELETE FROM `" . $vDatabase . "`.`" . $vTable . "`
		WHERE `". $vTable . "`.`date` = '$vDate' AND `". $vTable . "`.`id` = '$vRecord';
		";
        break;
}
$Result = mysql_query($Query) or die("DIE!");
?>

