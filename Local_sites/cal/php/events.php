<?php
require_once("connect.php");
$vMonth = $_POST["vMonth"];
$vYear = $_POST["vYear"];
$vDatabase = $_POST["vDatabase"];
$vTable = $_POST["vTable"];
$xml = '<?xml version="1.0" encoding="utf-8"?>';
$xml .= '<events>';
$eventsQuery = "SELECT * FROM `" . $vDatabase . "`.`" . $vTable . "` WHERE MONTH(date) = '$vMonth' AND YEAR(date) = '$vYear' ORDER BY `date`,`time`";
$eventsRecset = mysql_query( $eventsQuery ) or die("error occured");
while($eventsRow = mysql_fetch_assoc($eventsRecset)){	
	$xml .= '<event>';
		$xml .= '<date>'.date('Y-m-d', strtotime($eventsRow['date'])).'</date>';
		$xml .= '<time>'.$eventsRow['time'].'</time>';
		$xml .= '<title>'.$eventsRow['title'].'</title>';
		$xml .= '<description><![CDATA['.$eventsRow['description'].']]></description>';
		$xml .= '<link><![CDATA['.$eventsRow['link'].']]></link>';
		$xml .= '<record>'.$eventsRow['id'].'</record>';
	$xml .= '</event>';
}
$xml .= '</events>';
echo $xml;  
?>