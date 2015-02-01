<?php
// ERROR REPORTING
ini_set('display_errors',1);
error_reporting(E_ALL);

// INCLUDES
include("database.php");
$tabel = "bb_client";

// GET VARIABLE CLIENT
if (!empty($_GET["idc"])){	$idPatient = $_GET["idc"];$currentpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);$sqlp = "select lastpageC from bb_aanvraagtabel where idPatient = '$idPatient'";$resultp = $db->select($sqlp);$numrowsp = $resultp->num_rows();if ($numrowsp == '1'){
//GET LAST SAVE LOCATION AND UPDATE OR REDIRECT // AUTOSAVE
while ($rowp = $resultp->fetch_assoc()){$lastpage = $rowp["lastpageC"];}$resultp->close();if (!empty($_GET["action"]) && $_GET["action"] == "back"){$results = $db->execute_query("UPDATE bb_aanvraagtabel SET lastpageC = '".$currentpage."' WHERE idPatient = '".$idPatient."'");}else{if (!empty($_POST)){$results = $db->execute_query("UPDATE bb_aanvraagtabel SET lastpageC = '".$currentpage."' WHERE idPatient = '".$idPatient."'");}else{if ($lastpage != $currentpage){header("location:$lastpage?idc=$idPatient");}}}}	if ($numrowsp == '0'){header("location:error.php");	}}else{header("location:error.php");}

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
<script>$(function() {	i = 1;while (i < 113){if  ($( "#radio"+i)){$( "#radio"+i ).buttonset();}i++;}});</script>