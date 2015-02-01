<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "A3a";
$submitVariableB = "A3b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "A4a";
$variableB = "A4b";
$labelA = "ervaarconcentreren";
$labelB = "hieraanwerkenconcentreren";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina2">
<p align="center"><progress value="2" max="53"></progress></p>
<form id="form" method="post" action="mantel-step2-2.php?idm=<?php echo $idMantel; ?>">
	<h2>Leren en toepassen van kennis</h2>
			<h3>Zich kunnen concentreren zonder te worden afgeleid (zoals het volgen van een gesprek in een drukke omgeving, of het volgen van een Tv-programma)</h3>
				<div>
					<center><img src="images/A%20-%20leren%20en%20toepassen%20van%20kennis/d160%20-%20zich%20kunnen%20concentreren.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaarconcentreren1" name="A4a" value="1"><label for="ervaarconcentreren1">Verloopt naar wens</label>
						<input type="radio" id="ervaarconcentreren2" name="A4a" value="2"><label for="ervaarconcentreren2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaarconcentreren3" name="A4a" value="3"><label for="ervaarconcentreren3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaarconcentreren4" name="A4a" value="4"><label for="ervaarconcentreren4">Probleem - hinderlijk voor cliënt</label>
						<input type="radio" id="ervaarconcentreren5" name="A4a" value="5"><label for="ervaarconcentreren5">Probleem - hinderlijk voor beide</label>
					</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenconcentreren1" name="A4b" value="1"><label for="hieraanwerkenconcentreren1">Ja</label>
							<input type="radio" id="hieraanwerkenconcentreren2" name="A4b" value="2"><label for="hieraanwerkenconcentreren2">Nee</label>
						</div>
					<br>
				</div>
<a href="mantel-step2.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina2 -->
</form>
<?php include("footer.php"); ?>