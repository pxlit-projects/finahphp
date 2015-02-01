<?php include("headermantel.php"); ?>
</head>
<body>
<div id="pagina1">
<h2>Enquête Mantelzorger</h2>
<form id="form" method="post" action="mantel-step2.php?idm=<?php echo $idMantel; ?>">
Korte inleiding over de enquête</br></br>
<input type="submit" name="volgende" value="START" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina1 -->
</form>
<?php include("footer.php"); ?>