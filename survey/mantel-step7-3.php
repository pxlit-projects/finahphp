<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "D3a";
$submitVariableB = "D3b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "D4a";
$variableB = "D4b";
$labelA = "ervaargebruikenvanopenbaarvervoer";
$labelB = "hieraanwerkengebruikenvanopenbaarvervoer";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina7">
<p align="center"><progress value="23" max="53"></progress></p>
<form id="form" method="post" action="mantel-step7-4.php?idm=<?php echo $idMantel; ?>">
	<h2>Mobiliteit</h2>
			<h3>Gebruiken van openbaar vervoer (zoals de bus of de trein nemen)</h3>
				<div>
					<center><img src="images/D%20-%20Mobiliteit/d470%20-%20gebruiken%20van%20vervoermiddel.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaargebruikenvanopenbaarvervoer1" name="D4a" value="1"><label for="ervaargebruikenvanopenbaarvervoer1">Verloopt naar wens</label>
							<input type="radio" id="ervaargebruikenvanopenbaarvervoer2" name="D4a" value="2"><label for="ervaargebruikenvanopenbaarvervoer2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaargebruikenvanopenbaarvervoer3" name="D4a" value="3"><label for="ervaargebruikenvanopenbaarvervoer3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaargebruikenvanopenbaarvervoer4" name="D4a" value="4"><label for="ervaargebruikenvanopenbaarvervoer4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaargebruikenvanopenbaarvervoer5" name="D4a" value="5"><label for="ervaargebruikenvanopenbaarvervoer5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkengebruikenvanopenbaarvervoer1" name="D4b" value="1"><label for="hieraanwerkengebruikenvanopenbaarvervoer1">Ja</label>
							<input type="radio" id="hieraanwerkengebruikenvanopenbaarvervoer2" name="D4b" value="2"><label for="hieraanwerkengebruikenvanopenbaarvervoer2">Nee</label>
						</div>
					<br>
				</div>			
				<a href="mantel-step7-2.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina7 -->
</form>
<?php include("footer.php"); ?>