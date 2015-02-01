<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "E2a";
$submitVariableB = "E2b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "E3a";
$variableB = "E3b";
$labelA = "ervaarzelfstandigtoiletgaan";
$labelB = "hieraanwerkenzelfstandigtoiletgaan";
include("headerscripts.php");
?>
</head><body>
<div id="pagina8">
<p align="center"><progress value="27" max="53"></progress></p>
<form id="form" method="post" action="client-step8-3.php?idc=<?php echo $idPatient; ?>">
	<h2>Zelfverzorging</h2>			
			<h3>Zelfstandig naar het toilet kunnen gaan</h3>
				<div>
					<center><img src="images/E%20-%20Zelfverzorging/d530%20-%20zelfstandig%20naar%20het%20toilet%20kunnen%20gaan.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarzelfstandigtoiletgaan1" name="E3a" value="1"><label for="ervaarzelfstandigtoiletgaan1">Verloopt naar wens</label>
							<input type="radio" id="ervaarzelfstandigtoiletgaan2" name="E3a" value="2"><label for="ervaarzelfstandigtoiletgaan2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarzelfstandigtoiletgaan3" name="E3a" value="3"><label for="ervaarzelfstandigtoiletgaan3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarzelfstandigtoiletgaan4" name="E3a" value="4"><label for="ervaarzelfstandigtoiletgaan4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarzelfstandigtoiletgaan5" name="E3a" value="5"><label for="ervaarzelfstandigtoiletgaan5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenzelfstandigtoiletgaan1" name="E3b" value="1"><label for="hieraanwerkenzelfstandigtoiletgaan1">Ja</label>
							<input type="radio" id="hieraanwerkenzelfstandigtoiletgaan2" name="E3b" value="2"><label for="hieraanwerkenzelfstandigtoiletgaan2">Nee</label>
						</div>
					<br>
				</div>			
<a href="client-step8-1.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina8 -->
</form>
<?php include("footer.php"); ?>