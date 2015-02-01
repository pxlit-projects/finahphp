<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "A6a";
$submitVariableB = "A6b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "A8a";
$variableB = "A8b";
$labelA = "ervaarrekenen";
$labelB = "hieraanwerkenrekenen";
include("headerscripts.php");
?>
</head><body>
<div id="pagina3">
<p align="center"><progress value="5" max="53"></progress></p>
<form id="form" method="post" action="client-step3-2.php?idc=<?php echo $idPatient; ?>">
	<h2>Leren en toepassen van kennis</h2>
		<h3>Rekenen (zoals gepast betalen bij een winkel)</h3>
				<div>
					<center><img src="images/A%20-%20leren%20en%20toepassen%20van%20kennis/d172%20-%20rekenen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaarrekenen1" name="A8a" value="1"><label for="ervaarrekenen1">Verloopt naar wens</label>
						<input type="radio" id="ervaarrekenen2" name="A8a" value="2"><label for="ervaarrekenen2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaarrekenen3" name="A8a" value="3"><label for="ervaarrekenen3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaarrekenen4" name="A8a" value="4"><label for="ervaarrekenen4">Probleem - hinderlijk voor mantelzorger</label>
						<input type="radio" id="ervaarrekenen5" name="A8a" value="5"><label for="ervaarrekenen5">Probleem - hinderlijk voor beide</label>
					</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenrekenen1" name="A8b" value="1"><label for="hieraanwerkenrekenen1">Ja</label>
							<input type="radio" id="hieraanwerkenrekenen2" name="A8b" value="2"><label for="hieraanwerkenrekenen2">Nee</label>
						</div>
					<br>
				</div>
				<a href="client-step3.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina3 -->
</form>
<?php include("footer.php"); ?>