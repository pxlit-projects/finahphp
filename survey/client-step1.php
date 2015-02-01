<?php include("headerclient.php"); ?>
</head>
<body>
<div id="pagina1">
<h2>Enquête Cliënt</h2>
<form id="form" method="post" action="client-step2.php?idc=<?php echo $idPatient; ?>">
<!-- dit formulier is de client versie -->
	Korte inleiding over de enquête</br></br>
	<input type="submit" name="volgende" value="START" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina1 -->
</form>
<?php include("footer.php"); ?>