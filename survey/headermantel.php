<?php
// ERROR REPORTING
ini_set('display_errors',1);
error_reporting(E_ALL);

// INCLUDES
include("database.php");
$tabel = "bb_mantel";

// GET VARIABLE MANTEL
if (!empty($_GET["idm"])){	$idMantel = $_GET["idm"];$currentpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);$sqlp = "select lastpageM from bb_aanvraagtabel where idMantel = '$idMantel'";$resultp = $db->select($sqlp);$numrowsp = $resultp->num_rows();if ($numrowsp == '1'){
//GET LAST SAVE LOCATION AND UPDATE OR REDIRECT // AUTOSAVE
while ($rowp = $resultp->fetch_assoc()){$lastpage = $rowp["lastpageM"];}$resultp->close();if (!empty($_GET["action"]) && $_GET["action"] == "back"){$results = $db->execute_query("UPDATE bb_aanvraagtabel SET lastpageM = '".$currentpage."' WHERE idMantel = '".$idMantel."'");}else{if (!empty($_POST)){$results = $db->execute_query("UPDATE bb_aanvraagtabel SET lastpageM = '".$currentpage."' WHERE idMantel = '".$idMantel."'");}else{if ($lastpage != $currentpage){header("location:$lastpage?idm=$idMantel");}}}}	if ($numrowsp == '0'){header("location:error.php");	}}else{header("location:error.php");}

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