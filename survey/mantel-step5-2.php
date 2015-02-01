<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "C2a";
$submitVariableB = "C2b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "C3a";
$variableB = "C3b";
$labelA = "ervaarbegrijpengeschrevenboodschappen";
$labelB = "hieraanwerkenbegrijpengeschrevenboodschappen";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina5">
<p align="center"><progress value="14" max="53"></progress></p>
<form id="form" method="post" action="mantel-step5-3.php?idm=<?php echo $idMantel; ?>">
	<h2>Communicatie</h2>
			<h3>Begrijpen van geschreven boodschappen (zoals het lezen van de krant)</h3>
				<div>
					<center><img src="images/C%20-%20Communicatie/d325%20-%20begrijpen%20van%20geschreven%20boodschappen.jpg"></center>
					<br>				
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarbegrijpengeschrevenboodschappen1" name="C3a" value="1"><label for="ervaarbegrijpengeschrevenboodschappen1">Verloopt naar wens</label>
							<input type="radio" id="ervaarbegrijpengeschrevenboodschappen2" name="C3a" value="2"><label for="ervaarbegrijpengeschrevenboodschappen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarbegrijpengeschrevenboodschappen3" name="C3a" value="3"><label for="ervaarbegrijpengeschrevenboodschappen3">Er is een probleem dat enkel hinderlijk is voor de mantelzorger</label>
							<input type="radio" id="ervaarbegrijpengeschrevenboodschappen4" name="C3a" value="4"><label for="ervaarbegrijpengeschrevenboodschappen4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarbegrijpengeschrevenboodschappen5" name="C3a" value="5"><label for="ervaarbegrijpengeschrevenboodschappen5">Probleem - hinderlijk voor beide</label>
						</div>
					<br>
					<div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenbegrijpengeschrevenboodschappen1" name="C3b" value="1"><label for="hieraanwerkenbegrijpengeschrevenboodschappen1">Ja</label>
							<input type="radio" id="hieraanwerkenbegrijpengeschrevenboodschappen2" name="C3b" value="2"><label for="hieraanwerkenbegrijpengeschrevenboodschappen2">Nee</label>
						</div>
				</div>
		<a href="mantel-step5-1.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina5 -->
</form>
<?php include("footer.php"); ?>