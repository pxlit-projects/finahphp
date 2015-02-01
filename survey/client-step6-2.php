<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "C6a";
$submitVariableB = "C6b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "C7a";
$variableB = "C7b";
$labelA = "ervaarvoerenvangesprek";
$labelB = "hieraanwerkenvoerenvangesprek";
include("headerscripts.php");
?>
</head><body>
<div id="pagina6">
<p align="center"><progress value="18" max="53"></progress></p>
<form id="form" method="post" action="client-step6-3.php?idc=<?php echo $idPatient; ?>">
	<h2>Communicatie</h2>
			<h3>Het voeren van een gesprek</h3>
				<div>
					<center><img src="images/C%20-%20Communicatie/d350%20-%20het%20voeren%20van%20een%20gesprek.jpg"></center>
					<br>				
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarvoerenvangesprek1" name="C7a" value="1"><label for="ervaarvoerenvangesprek1">Verloopt naar wens</label>
							<input type="radio" id="ervaarvoerenvangesprek2" name="C7a" value="2"><label for="ervaarvoerenvangesprek2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarvoerenvangesprek3" name="C7a" value="3"><label for="ervaarvoerenvangesprek3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarvoerenvangesprek4" name="C7a" value="4"><label for="ervaarvoerenvangesprek4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarvoerenvangesprek5" name="C7a" value="5"><label for="ervaarvoerenvangesprek5">Probleem - hinderlijk voor beide</label>
						</div>
					<br>
					<div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenvoerenvangesprek1" name="C7b" value="1"><label for="hieraanwerkenvoerenvangesprek1">Ja</label>
							<input type="radio" id="hieraanwerkenvoerenvangesprek2" name="C7b" value="2"><label for="hieraanwerkenvoerenvangesprek2">Nee</label>
						</div>
				</div>		
				<a href="client-step6-1.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina6 -->
</form>
<?php include("footer.php"); ?>