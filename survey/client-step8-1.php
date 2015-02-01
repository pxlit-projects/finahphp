<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "E1a";
$submitVariableB = "E1b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "E2a";
$variableB = "E2b";
$labelA = "ervaarverzorgenlichaamsdelen";
$labelB = "hieraanwerkenverzorgenlichaamsdelen";
include("headerscripts.php");
?>
</head><body>
<div id="pagina8">
<p align="center"><progress value="26" max="53"></progress></p>
<form id="form" method="post" action="client-step8-2.php?idc=<?php echo $idPatient; ?>">
	<h2>Zelfverzorging</h2>
			<h3>Verzorgen van lichaamsdelen (bijv. tanden poetsen, nagels knippen, make-up gebruiken)</h3>
				<div>
					<center><img src="images/E%20-%20Zelfverzorging/d520%20-%20verzorgen%20van%20lichaamsdelen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarverzorgenlichaamsdelen1" name="E2a" value="1"><label for="ervaarverzorgenlichaamsdelen1">Verloopt naar wens</label>
							<input type="radio" id="ervaarverzorgenlichaamsdelen2" name="E2a" value="2"><label for="ervaarverzorgenlichaamsdelen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarverzorgenlichaamsdelen3" name="E2a" value="3"><label for="ervaarverzorgenlichaamsdelen3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarverzorgenlichaamsdelen4" name="E2a" value="4"><label for="ervaarverzorgenlichaamsdelen4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarverzorgenlichaamsdelen5" name="E2a" value="5"><label for="ervaarverzorgenlichaamsdelen5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenverzorgenlichaamsdelen1" name="E2b" value="1"><label for="hieraanwerkenverzorgenlichaamsdelen1">Ja</label>
							<input type="radio" id="hieraanwerkenverzorgenlichaamsdelen2" name="E2b" value="2"><label for="hieraanwerkenverzorgenlichaamsdelen2">Nee</label>
						</div>
					<br>
				</div>
		<a href="client-step8.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina8 -->
</form>
<?php include("footer.php"); ?>