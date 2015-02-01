<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "I1a";
$submitVariableB = "I1b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "I2a";
$variableB = "I2b";
$labelA = "ervaarontspanningvrijetijd";
$labelB = "hieraanwerkenontspanningvrijetijd";
include("headerscripts.php");
?>
</head><body>
<div id="pagina12">	
<p align="center"><progress value="44" max="53"></progress></p>
<form id="form" method="post" action="client-step12-2.php?idc=<?php echo $idPatient; ?>">
	<h2>Maatschappelijk, sociaal en burgerlijk leven</h2>
			<h3>Ontspanning en vrije tijd (activiteiten gericht op amusement)</h3>
				<div>
					<center><img src="images/I%20-%20Maatschappelijk,%20sociaal%20en%20burgerlijk%20leven/d920%20-%20ontspanning%20en%20vrije%20tijd.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarontspanningvrijetijd1" name="I2a" value="1"><label for="ervaarontspanningvrijetijd1">Verloopt naar wens</label>
							<input type="radio" id="ervaarontspanningvrijetijd2" name="I2a" value="2"><label for="ervaarontspanningvrijetijd2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarontspanningvrijetijd3" name="I2a" value="3"><label for="ervaarontspanningvrijetijd3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarontspanningvrijetijd4" name="I2a" value="4"><label for="ervaarontspanningvrijetijd4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarontspanningvrijetijd5" name="I2a" value="5"><label for="ervaarontspanningvrijetijd5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenontspanningvrijetijd1" name="I2b" value="1"><label for="hieraanwerkenontspanningvrijetijd1">Ja</label>
							<input type="radio" id="hieraanwerkenontspanningvrijetijd2" name="I2b" value="2"><label for="hieraanwerkenontspanningvrijetijd2">Nee</label>
						</div>
					<br>
				</div>
				<a href="client-step12.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div>
</form>
<?php include("footer.php"); ?>