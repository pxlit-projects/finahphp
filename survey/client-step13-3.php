<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "J3a";
$submitVariableB = "J3b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "J4a";
$variableB = "J4b";
$labelA = "ervaarsnelleremotioneel";
$labelB = "hieraanwerkensnelleremotioneel";
include("headerscripts.php");
?>
</head><body>
<div id="pagina13">
<p align="center"><progress value="49" max="53"></progress></p>
<form id="form" method="post" action="client-step14.php?idc=<?php echo $idPatient; ?>">
	<h2>Emotie en gedrag</h2>
			<h3>Sneller emotioneel</h3>
				<div>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarsnelleremotioneel1" name="J4a" value="1"><label for="ervaarsnelleremotioneel1">Verloopt naar wens</label>
							<input type="radio" id="ervaarsnelleremotioneel2" name="J4a" value="2"><label for="ervaarsnelleremotioneel2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarsnelleremotioneel3" name="J4a" value="3"><label for="ervaarsnelleremotioneel3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarsnelleremotioneel4" name="J4a" value="4"><label for="ervaarsnelleremotioneel4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarsnelleremotioneel5" name="J4a" value="5"><label for="ervaarsnelleremotioneel5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkensnelleremotioneel1" name="J4b" value="1"><label for="hieraanwerkensnelleremotioneel1">Ja</label>
							<input type="radio" id="hieraanwerkensnelleremotioneel2" name="J4b" value="2"><label for="hieraanwerkensnelleremotioneel2">Nee</label>
						</div>
					<br>
				</div>					
		<a href="client-step13-2.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div>
</form>
<?php include("footer.php"); ?>