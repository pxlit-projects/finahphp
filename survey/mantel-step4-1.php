<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "B1a";
$submitVariableB = "B1b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "B2a";
$variableB = "B2b";
$labelA = "ervaareenvoudigetaak";
$labelB = "hieraanwerkeneenvoudigetaak";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina4">
<p align="center"><progress value="9" max="53"></progress></p>
<form id="form" method="post" action="mantel-step4-2.php?idm=<?php echo $idMantel; ?>">
	<h2>Algemene taken en activiteiten</h2>
			<h3>Ondernemen van een eenvoudige taak op eigen initiatief (zoals een boodschappenlijstje opmaken, de vuilzak buitenzetten, de tafel dekken)</h3>
				<div>
					<center><img src="images/B%20-%20Algemene%20taken%20en%20activiteiten/d210%20-%20ondernemen%20van%20een%20eenvoudige%20taak.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaareenvoudigetaak1" name="B2a" value="1"><label for="ervaareenvoudigetaak1">Verloopt naar wens</label>
						<input type="radio" id="ervaareenvoudigetaak2" name="B2a" value="2"><label for="ervaareenvoudigetaak2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaareenvoudigetaak3" name="B2a" value="3"><label for="ervaareenvoudigetaak3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaareenvoudigetaak4" name="B2a" value="4"><label for="ervaareenvoudigetaak4">Probleem - hinderlijk voor cliënt</label>
						<input type="radio" id="ervaareenvoudigetaak5" name="B2a" value="5"><label for="ervaareenvoudigetaak5">Probleem - hinderlijk voor beide</label>
					</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkeneenvoudigetaak1" name="B2b" value="1"><label for="hieraanwerkeneenvoudigetaak1">Ja</label>
							<input type="radio" id="hieraanwerkeneenvoudigetaak2" name="B2b" value="2"><label for="hieraanwerkeneenvoudigetaak2">Nee</label>
						</div>
					<br>
				</div>
				<a href="mantel-step4.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina4 -->
</form>
<?php include("footer.php"); ?>