<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "B4a";
$submitVariableB = "B4b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "C1a";
$variableB = "C1b";
$labelA = "ervaarbegrijpenvertellenvragen";
$labelB = "hieraanwerkenbegrijpenvertellenvragen";
include("headerscripts.php");
?>
</head><body>
<div id="pagina5">
<p align="center"><progress value="12" max="53"></progress></p>
<form id="form" method="post" action="client-step5-1.php?idc=<?php echo $idPatient; ?>">
	<h2>Communicatie</h2>
			<h3>Begrijpen wat iemand vertelt of vraagt</h3>
				<div>
					<center><img src="images/C%20-%20Communicatie/d310%20-%20begrijpen%20wat%20iemand%20vertelt%20of%20vraagt.jpg"></center>
					<br>			
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarbegrijpenvertellenvragen1" name="C1a" value="1"><label for="ervaarbegrijpenvertellenvragen1">Verloopt naar wens</label>
							<input type="radio" id="ervaarbegrijpenvertellenvragen2" name="C1a" value="2"><label for="ervaarbegrijpenvertellenvragen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarbegrijpenvertellenvragen3" name="C1a" value="3"><label for="ervaarbegrijpenvertellenvragen3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarbegrijpenvertellenvragen4" name="C1a" value="4"><label for="ervaarbegrijpenvertellenvragen4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarbegrijpenvertellenvragen5" name="C1a" value="5"><label for="ervaarbegrijpenvertellenvragen5">Probleem - hinderlijk voor beide</label>
						</div>
					<br>
					<div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenbegrijpenvertellenvragen1" name="C1b" value="1"><label for="hieraanwerkenbegrijpenvertellenvragen1">Ja</label>
							<input type="radio" id="hieraanwerkenbegrijpenvertellenvragen2" name="C1b" value="2"><label for="hieraanwerkenbegrijpenvertellenvragen2">Nee</label>
						</div>
				</div>
		<a href="client-step4-3.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina5 -->
</form>
<?php include("footer.php"); ?>