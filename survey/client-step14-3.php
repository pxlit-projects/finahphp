<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "J7a";
$submitVariableB = "J7b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "J8a";
$variableB = "J8b";
$labelA = "ervaarsnellervakermoe";
$labelB = "hieraanwerkensnellervakermoe";
include("headerscripts.php");
?>
</head><body>
<div id="pagina14">	
<p align="center"><progress value="53" max="53"></progress></p>
<form id="form" method="post" action="client-result.php?idc=<?php echo $idPatient; ?>">
<!-- dit formulier is de client versie -->
	<h2>Emotie en gedrag</h2>
			<h3>Sneller en vaker moe</h3>
				<div>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarsnellervakermoe1" name="J8a" value="1"><label for="ervaarsnellervakermoe1">Verloopt naar wens</label>
							<input type="radio" id="ervaarsnellervakermoe2" name="J8a" value="2"><label for="ervaarsnellervakermoe2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarsnellervakermoe3" name="J8a" value="3"><label for="ervaarsnellervakermoe3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarsnellervakermoe4" name="J8a" value="4"><label for="ervaarsnellervakermoe4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarsnellervakermoe5" name="J8a" value="5"><label for="ervaarsnellervakermoe5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
					<div id="radio2">
						<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkensnellervakermoe1" name="J8b" value="1"><label for="hieraanwerkensnellervakermoe1">Ja</label>
							<input type="radio" id="hieraanwerkensnellervakermoe2" name="J8b" value="2"><label for="hieraanwerkensnellervakermoe2">Nee</label>
					</div>
					<br>
				</div>
				<a href="client-step14-2.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div>
</form>
<?php include("footer.php"); ?>