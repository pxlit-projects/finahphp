<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "A10a";
$submitVariableB = "A10b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "B1a";
$variableB = "B1b";
$labelA = "ervaardagelijkseroutine";
$labelB = "hieraanwerkendagelijkseroutine";
include("headerscripts.php");
?>
</head><body>
<div id="pagina4">
<p align="center"><progress value="8" max="53"></progress></p>
<form id="form" method="post" action="client-step4-1.php?idc=<?php echo $idPatient; ?>">
	<h2>Algemene taken en activiteiten</h2>
		<h3>Uitvoeren  van dagelijkse routinehandelingen (zoals zich wassen, ontbijten)</h3>
				<div>
					<center><img src="images/B%20-%20Algemene%20taken%20en%20activiteiten/d230%20-%20uitvoeren%20van%20dagelijkse%20routinehandelingen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaardagelijkseroutine1" name="B1a" value="1"><label for="ervaardagelijkseroutine1">Verloopt naar wens</label>
						<input type="radio" id="ervaardagelijkseroutine2" name="B1a" value="2"><label for="ervaardagelijkseroutine2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaardagelijkseroutine3" name="B1a" value="3"><label for="ervaardagelijkseroutine3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaardagelijkseroutine4" name="B1a" value="4"><label for="ervaardagelijkseroutine4">Probleem - hinderlijk voor mantelzorger</label>
						<input type="radio" id="ervaardagelijkseroutine5" name="B1a" value="5"><label for="ervaardagelijkseroutine5">Probleem - hinderlijk voor beide</label>
					</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkendagelijkseroutine1" name="B1b" value="1"><label for="hieraanwerkendagelijkseroutine1">Ja</label>
							<input type="radio" id="hieraanwerkendagelijkseroutine2" name="B1b" value="2"><label for="hieraanwerkendagelijkseroutine2">Nee</label>
						</div>
					<br>
				</div>
		<a href="client-step3-3.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div>
</form>
<?php include("footer.php"); ?>