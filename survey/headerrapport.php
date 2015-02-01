<?php
// ERROR REPORTING
ini_set('display_errors',1);
error_reporting(E_ALL);

// INCLUDES
include("database.php");
$tabelclient = "bb_client";
$tabelmantel = "bb_mantel";

// CHECK
if (!empty($_GET["idc"]) && !empty($_GET["idm"]) && !empty($_GET["idr"])){
	$idRapport = $_GET["idr"];
	$idPatient = $_GET["idc"];
	$sqlp = "select idP_compleet from bb_aanvraagtabel where idPatient = '$idPatient' and idRapport ='$idRapport'";
	$resultp = $db->select($sqlp);
	$numrowsp = $resultp->num_rows();
	$idMantel = $_GET["idm"];
	$sqlm = "select idM_compleet from bb_aanvraagtabel where idMantel = '$idMantel' and idRapport ='$idRapport'";
	$resultm = $db->select($sqlm);
	$numrowsm = $resultm->num_rows();
	if ($numrowsp == '1' && $numrowsm == '1')
	{
		while ($rowp = $resultp->fetch_assoc()) {$idP_compleet = $rowp["idP_compleet"];}
		while ($rowm = $resultm->fetch_assoc()) {$idM_compleet = $rowm["idM_compleet"];}
		if ($idP_compleet == '1' && $idM_compleet == '1'){$allesok = "OK";
		}else{header("location:error.php");}
	}else{header("location:error.php");}
}else{header("location:error.php");}
$resultp->close();
$resultm->close();
// START HTML
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="resources/style.css">
<link rel="stylesheet" href="resources/jquery-ui.css">
<script src="resources/jquery-1.11.1.js"></script>
<script src="resources/jquery-ui.js"></script>
<script src="resources/jquery.validate.js" type="text/javascript"></script>