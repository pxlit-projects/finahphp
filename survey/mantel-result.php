<?php 
include("headermantel.php");
//variable voor opbouw nieuwe-huidige pagina
$labelA = "";
$labelB = "";
$variableA = "";
$variableB = "";
//variable voor save van vorige pagina
$submitVariableA = "J8a";
$submitVariableB = "J8b";
include("headerscriptsmantel.php");
$results = $db->execute_query("UPDATE bb_aanvraagtabel SET idM_compleet = '1' WHERE idMantel = '".$idMantel."'");
?>
</head>
<body>
<div id="paginaresult">	
<h2>Enquête cliënt - RESULTAAT</h2>
</br>'Bedankt voor uw deelname, u mag nu dit venster sluiten'
</div>
<?php include("footer.php"); ?>