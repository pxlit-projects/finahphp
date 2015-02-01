<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "G5a";
$submitVariableB = "G5b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "H1a";
$variableB = "H1b";
$labelA = "ervaarvormingtrainingopleiding";
$labelB = "hieraanwerkenvormingtrainingopleiding";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina11">
<p align="center"><progress value="40" max="53"></progress></p>
<form id="form" method="post" action="mantel-step11-1.php?idm=<?php echo $idMantel; ?>">
	<h2>Belangrijke levensgebeiden</h2>
			<h3>Het volgen van een vorming, training en/of opleiding</h3>
				<div>
					<center><img src="images/H%20-%20Belangrijke%20levensgebieden/d810%20-%20het%20volgen%20van%20een%20vorming,%20training%20en%20of%20opleiding.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarvormingtrainingopleiding1" name="H1a" value="1"><label for="ervaarvormingtrainingopleiding1">Verloopt naar wens</label>
							<input type="radio" id="ervaarvormingtrainingopleiding2" name="H1a" value="2"><label for="ervaarvormingtrainingopleiding2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarvormingtrainingopleiding3" name="H1a" value="3"><label for="ervaarvormingtrainingopleiding3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarvormingtrainingopleiding4" name="H1a" value="4"><label for="ervaarvormingtrainingopleiding4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarvormingtrainingopleiding5" name="H1a" value="5"><label for="ervaarvormingtrainingopleiding5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenvormingtrainingopleiding1" name="H1b" value="1"><label for="hieraanwerkenvormingtrainingopleiding1">Ja</label>
							<input type="radio" id="hieraanwerkenvormingtrainingopleiding2" name="H1b" value="2"><label for="hieraanwerkenvormingtrainingopleiding2">Nee</label>
						</div>
					<br>
				</div>
		<a href="mantel-step10-4.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina11 -->
</form>
<?php include("footer.php"); ?>