<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "C7a";
$submitVariableB = "C7b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "C8a";
$variableB = "C8b";
$labelA = "ervaarcommunicatieapptechnologie";
$labelB = "hieraanwerkencommunicatieapptechnologie";
include("headerscripts.php");
?>
</head><body>
<div id="pagina6">
<p align="center"><progress value="19" max="53"></progress></p>
<form id="form" method="post" action="client-step7.php?idc=<?php echo $idPatient; ?>">
	<h2>Communicatie</h2>
			<h3>Gebruiken van communicatieapparatuur en -technieken (zoals gebruik van telefoon, GSM, computer, hoorapparaat, etc)</h3>
				<div>
					<center><img src="images/C%20-%20Communicatie/d360%20-%20gebruiken%20van%20communicatieapparatuur%20en%20-technieken.jpg"></center>
					<br>				
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarcommunicatieapptechnologie1" name="C8a" value="1"><label for="ervaarcommunicatieapptechnologie1">Verloopt naar wens</label>
							<input type="radio" id="ervaarcommunicatieapptechnologie2" name="C8a" value="2"><label for="ervaarcommunicatieapptechnologie2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarcommunicatieapptechnologie3" name="C8a" value="3"><label for="ervaarcommunicatieapptechnologie3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarcommunicatieapptechnologie4" name="C8a" value="4"><label for="ervaarcommunicatieapptechnologie4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarcommunicatieapptechnologie5" name="C8a" value="5"><label for="ervaarcommunicatieapptechnologie5">Probleem - hinderlijk voor beide</label>
						</div>
					<br>
					<div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
						<input type="radio" id="hieraanwerkencommunicatieapptechnologie1" name="C8b" value="1"><label for="hieraanwerkencommunicatieapptechnologie1">Ja</label>
						<input type="radio" id="hieraanwerkencommunicatieapptechnologie2" name="C8b" value="2"><label for="hieraanwerkencommunicatieapptechnologie2">Nee</label>
					</div>
				</div>		
				<a href="client-step6-2.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina6 -->
</form>
<?php include("footer.php"); ?>