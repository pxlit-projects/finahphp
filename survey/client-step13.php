<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "I3a";
$submitVariableB = "I3b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "J1a";
$variableB = "J1b";
$labelA = "ervaarsomberneerslachtigdepressief";
$labelB = "hieraanwerkensomberneerslachtigdepressief";
include("headerscripts.php");
?>
</head><body>
<div id="pagina13">
<p align="center"><progress value="46" max="53"></progress></p>
<form id="form" method="post" action="client-step13-1.php?idc=<?php echo $idPatient; ?>">
	<h2>Emotie en gedrag</h2>
			<h3>Somber, neerslachtig, depressief</h3>
				<div>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarsomberneerslachtigdepressief1" name="J1a" value="1"><label for="ervaarsomberneerslachtigdepressief1">Verloopt naar wens</label>
							<input type="radio" id="ervaarsomberneerslachtigdepressief2" name="J1a" value="2"><label for="ervaarsomberneerslachtigdepressief2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarsomberneerslachtigdepressief3" name="J1a" value="3"><label for="ervaarsomberneerslachtigdepressief3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarsomberneerslachtigdepressief4" name="J1a" value="4"><label for="ervaarsomberneerslachtigdepressief4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarsomberneerslachtigdepressief5" name="J1a" value="5"><label for="ervaarsomberneerslachtigdepressief5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkensomberneerslachtigdepressief1" name="J1b" value="1"><label for="hieraanwerkensomberneerslachtigdepressief1">Ja</label>
							<input type="radio" id="hieraanwerkensomberneerslachtigdepressief2" name="J1b" value="2"><label for="hieraanwerkensomberneerslachtigdepressief2">Nee</label>
						</div>
					<br>
				</div>		
		<a href="client-step12-2.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div>
</form>
<?php include("footer.php"); ?>