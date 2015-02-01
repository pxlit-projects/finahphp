<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "C1a";
$submitVariableB = "C1b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "C2a";
$variableB = "C2b";
$labelA = "ervaarbegrijpennonverbaal";
$labelB = "hieraanwerkenbegrijpennonverbaal";
include("headerscripts.php");
?>
</head><body>
<div id="pagina5">
<p align="center"><progress value="13" max="53"></progress></p>
<form id="form" method="post" action="client-step5-2.php?idc=<?php echo $idPatient; ?>">
	<h2>Communicatie</h2>
			<h3>Begrijpen van non-verbale (niet gesproken) boodschappen (zoals pictogrammen, afbeeldingen, symbolen, lichaamstaal en gezichtsuitdrukkingen)</h3>
				<div>
					<center><img src="images/C%20-%20Communicatie/d315%20-%20begrijpen%20van%20non-verbale%20boodschappen.jpg"></center>
					<br>			
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarbegrijpennonverbaal1" name="C2a" value="1"><label for="ervaarbegrijpennonverbaal1">Verloopt naar wens</label>
							<input type="radio" id="ervaarbegrijpennonverbaal2" name="C2a" value="2"><label for="ervaarbegrijpennonverbaal2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarbegrijpennonverbaal3" name="C2a" value="3"><label for="ervaarbegrijpennonverbaal3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarbegrijpennonverbaal4" name="C2a" value="4"><label for="ervaarbegrijpennonverbaal4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarbegrijpennonverbaal5" name="C2a" value="5"><label for="ervaarbegrijpennonverbaal5">Probleem - hinderlijk voor beide</label>
						</div>
					<br>
					<div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenbegrijpennonverbaal1" name="C2b" value="1"><label for="hieraanwerkenbegrijpennonverbaal1">Ja</label>
							<input type="radio" id="hieraanwerkenbegrijpennonverbaal2" name="C2b" value="2"><label for="hieraanwerkenbegrijpennonverbaal2">Nee</label>
						</div>
				</div>
		<a href="client-step5.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina5 -->
</form>
<?php include("footer.php"); ?>