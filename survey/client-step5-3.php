<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "C3a";
$submitVariableB = "C3b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "C4a";
$variableB = "C4b";
$labelA = "ervaarspreken";
$labelB = "hieraanwerkenspreken";
include("headerscripts.php");
?>
</head><body>
<div id="pagina5">
<p align="center"><progress value="15" max="53"></progress></p>
<form id="form" method="post" action="client-step6.php?idc=<?php echo $idPatient; ?>">
	<h2>Communicatie</h2>
			<h3>Spreken</h3>
				<div>
					<center><img src="images/C%20-%20Communicatie/d330%20-%20spreken.jpg"></center>
					<br>				
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarspreken1" name="C4a" value="1"><label for="ervaarspreken1">Verloopt naar wens</label>
							<input type="radio" id="ervaarspreken2" name="C4a" value="2"><label for="ervaarspreken2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarspreken3" name="C4a" value="3"><label for="ervaarspreken3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarspreken4" name="C4a" value="4"><label for="ervaarspreken4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarspreken5" name="C4a" value="5"><label for="ervaarspreken5">Probleem - hinderlijk voor beide</label>
						</div>
					<br>
					<div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenspreken1" name="C4b" value="1"><label for="hieraanwerkenspreken1">Ja</label>
							<input type="radio" id="hieraanwerkenspreken2" name="C4b" value="2"><label for="hieraanwerkenspreken2">Nee</label>
						</div>
				</div>
		<a href="client-step5-2.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina5 -->
</form>
<?php include("footer.php"); ?>