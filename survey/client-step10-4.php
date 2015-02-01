<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "G4a";
$submitVariableB = "G4b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "G5a";
$variableB = "G5b";
$labelA = "ervaarformelerelaties";
$labelB = "hieraanwerkenformelerelaties";
include("headerscripts.php");
?>
</head><body>
<div id="pagina10">	
<p align="center"><progress value="39" max="53"></progress></p>
<form id="form" method="post" action="client-step11.php?idc=<?php echo $idPatient; ?>">
	<h2>Omgaan met andere mensen</h2>
			<h3>Formele relaties (zoals omgang met collega's, werkgever, dokters en verzorgenden)</h3>
				<div>
					<center><img src="images/G%20-%20Tussenmenselijke%20interacties%20en%20relaties/d730%20-%20formele%20relaties.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarformelerelaties1" name="G5a" value="1"><label for="ervaarformelerelaties1">Verloopt naar wens</label>
							<input type="radio" id="ervaarformelerelaties2" name="G5a" value="2"><label for="ervaarformelerelaties2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarformelerelaties3" name="G5a" value="3"><label for="ervaarformelerelaties3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarformelerelaties4" name="G5a" value="4"><label for="ervaarformelerelaties4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarformelerelaties5" name="G5a" value="5"><label for="ervaarformelerelaties5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenformelerelaties1" name="G5b" value="1"><label for="hieraanwerkenformelerelaties1">Ja</label>
							<input type="radio" id="hieraanwerkenformelerelaties2" name="G5b" value="2"><label for="hieraanwerkenformelerelaties2">Nee</label>
						</div>
					<br>
				</div>
				<a href="client-step10-3.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina10 -->
</form>
<?php include("footer.php"); ?>