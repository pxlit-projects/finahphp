<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "E6a";
$submitVariableB = "E6b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "E7a";
$variableB = "E7b";
$labelA = "ervaarlettenopgezondheid";
$labelB = "hieraanwerkenlettenopgezondheid";
include("headerscripts.php");
?>
</head><body>
<div id="pagina8">
<p align="center"><progress value="31" max="53"></progress></p>
<form id="form" method="post" action="client-step9.php?idc=<?php echo $idPatient; ?>">
	<h2>Zelfverzorging</h2>
			<h3>Letten op de gezondheid (gevarieerd eten, voldoende lichaamsbeweging, gezondheidsrisico's vermijden)</h3>
				<div>
					<center><img src="images/E%20-%20Zelfverzorging/d570%20-%20letten%20op%20de%20gezondheid.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarlettenopgezondheid1" name="E7a" value="1"><label for="ervaarlettenopgezondheid1">Verloopt naar wens</label>
							<input type="radio" id="ervaarlettenopgezondheid2" name="E7a" value="2"><label for="ervaarlettenopgezondheid2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarlettenopgezondheid3" name="E7a" value="3"><label for="ervaarlettenopgezondheid3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarlettenopgezondheid4" name="E7a" value="4"><label for="ervaarlettenopgezondheid4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarlettenopgezondheid5" name="E7a" value="5"><label for="ervaarlettenopgezondheid5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenlettenopgezondheid1" name="E7b" value="1"><label for="hieraanwerkenlettenopgezondheid1">Ja</label>
							<input type="radio" id="hieraanwerkenlettenopgezondheid2" name="E7b" value="2"><label for="hieraanwerkenlettenopgezondheid2">Nee</label>
						</div>
					<br>
				</div>
		<a href="client-step8-5.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina8 -->
</form>
<?php include("footer.php"); ?>