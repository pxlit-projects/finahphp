<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "B2a";
$submitVariableB = "B2b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "B3a";
$variableB = "B3b";
$labelA = "ervaarcomplexetaken";
$labelB = "hieraanwerkencomplexetaken";
include("headerscripts.php");
?>
</head><body>
<div id="pagina4">
<p align="center"><progress value="10" max="53"></progress></p>
<form id="form" method="post" action="client-step4-3.php?idc=<?php echo $idPatient; ?>">
	<h2>Algemene taken en activiteiten</h2>
		<h3>Ondernemen van complexe taken op eigen initiatief (zoals autorijden, boodschappen doen, uitgebreid koken)</h3>
				<div>
					<center><img src="images/B%20-%20Algemene%20taken%20en%20activiteiten/d220%20-%20ondernemen%20van%20complexe%20taken.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaarcomplexetaken1" name="B3a" value="1"><label for="ervaarcomplexetaken1">Verloopt naar wens</label>
						<input type="radio" id="ervaarcomplexetaken2" name="B3a" value="2"><label for="ervaarcomplexetaken2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaarcomplexetaken3" name="B3a" value="3"><label for="ervaarcomplexetaken3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaarcomplexetaken4" name="B3a" value="4"><label for="ervaarcomplexetaken4">Probleem - hinderlijk voor mantelzorger</label>
						<input type="radio" id="ervaarcomplexetaken5" name="B3a" value="5"><label for="ervaarcomplexetaken5">Probleem - hinderlijk voor beide</label>
					</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkencomplexetaken1" name="B3b" value="1"><label for="hieraanwerkencomplexetaken1">Ja</label>
							<input type="radio" id="hieraanwerkencomplexetaken2" name="B3b" value="2"><label for="hieraanwerkencomplexetaken2">Nee</label>
						</div>
					<br>
				</div>
				<a href="client-step4-1.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina4 -->

</form>

<?php include("footer.php"); ?>