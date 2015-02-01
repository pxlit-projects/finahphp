<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "B3a";
$submitVariableB = "B3b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "B4a";
$variableB = "B4b";
$labelA = "ervaarstressvollesituaties";
$labelB = "hieraanwerkenstressvollesituaties";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina4">
<p align="center"><progress value="11" max="53"></progress></p>
<form id="form" method="post" action="mantel-step5.php?idm=<?php echo $idMantel; ?>">
	<h2>Algemene taken en activiteiten</h2>
			<h3>Omgaan met stressvolle situaties(zoals het autorijden in druk verkeer of het verzorgen van meerdere kinderen)</h3>
				<div>
					<center><img src="images/B%20-%20Algemene%20taken%20en%20activiteiten/d240.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaarstressvollesituaties1" name="B4a" value="1"><label for="ervaarstressvollesituaties1">Verloopt naar wens</label>
						<input type="radio" id="ervaarstressvollesituaties2" name="B4a" value="2"><label for="ervaarstressvollesituaties2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaarstressvollesituaties3" name="B4a" value="3"><label for="ervaarstressvollesituaties3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaarstressvollesituaties4" name="B4a" value="4"><label for="ervaarstressvollesituaties4">Probleem - hinderlijk voor cliënt</label>
						<input type="radio" id="ervaarstressvollesituaties5" name="B4a" value="5"><label for="ervaarstressvollesituaties5">Probleem - hinderlijk voor beide</label>
					</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenstressvollesituaties1" name="B4b" value="1"><label for="hieraanwerkenstressvollesituaties1">Ja</label>
							<input type="radio" id="hieraanwerkenstressvollesituaties2" name="B4b" value="2"><label for="hieraanwerkenstressvollesituaties2">Nee</label>
						</div>
					<br>
				</div>
				<a href="mantel-step4-2.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina4 -->
</form>
<?php include("footer.php"); ?>