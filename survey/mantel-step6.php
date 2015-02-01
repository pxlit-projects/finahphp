<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "C4a";
$submitVariableB = "C4b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "C5a";
$variableB = "C5b";
$labelA = "ervaarlichaamstaalhandgebarengezichtsuitdrukkingen";
$labelB = "hieraanwerkenlichaamstaalhandgebarengezichtsuitdrukkingen";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina6">
<p align="center"><progress value="16" max="53"></progress></p>
<form id="form" method="post" action="mantel-step6-1.php?idm=<?php echo $idMantel; ?>">
	<h2>Communicatie</h2>
			<h3>Zich uiten dmv lichaamstaal, handgebaren en gezichtsuitdrukkingen</h3>
				<div>
					<center><img src="images/C%20-%20Communicatie/d335%20-%20zicht%20uiten%20dmv%20lichaamstaal.jpg"></center>
					<br>				
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarlichaamstaalhandgebarengezichtsuitdrukkingen1" name="C5a" value="1"><label for="ervaarlichaamstaalhandgebarengezichtsuitdrukkingen1">Verloopt naar wens</label>
							<input type="radio" id="ervaarlichaamstaalhandgebarengezichtsuitdrukkingen2" name="C5a" value="2"><label for="ervaarlichaamstaalhandgebarengezichtsuitdrukkingen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarlichaamstaalhandgebarengezichtsuitdrukkingen3" name="C5a" value="3"><label for="ervaarlichaamstaalhandgebarengezichtsuitdrukkingen3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarlichaamstaalhandgebarengezichtsuitdrukkingen4" name="C5a" value="4"><label for="ervaarlichaamstaalhandgebarengezichtsuitdrukkingen4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarlichaamstaalhandgebarengezichtsuitdrukkingen5" name="C5a" value="5"><label for="ervaarlichaamstaalhandgebarengezichtsuitdrukkingen5">Probleem - hinderlijk voor beide</label>
						</div>
					<br>
					<div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenlichaamstaalhandgebarengezichtsuitdrukkingen1" name="C5b" value="1"><label for="hieraanwerkenlichaamstaalhandgebarengezichtsuitdrukkingen1">Ja</label>
							<input type="radio" id="hieraanwerkenlichaamstaalhandgebarengezichtsuitdrukkingen2" name="C5b" value="2"><label for="hieraanwerkenlichaamstaalhandgebarengezichtsuitdrukkingen2">Nee</label>
						</div>
				</div>
				<a href="mantel-step5-3.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina6 -->
</form>
<?php include("footer.php"); ?>