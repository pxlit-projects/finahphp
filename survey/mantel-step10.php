<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "F3a";
$submitVariableB = "F3b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "G1a";
$variableB = "G1b";
$labelA = "ervaarsociaalgepastewijzecontact";
$labelB = "hieraanwerkensociaalgepastewijzecontact";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina10">	
<p align="center"><progress value="35" max="53"></progress></p>
<form id="form" method="post" action="mantel-step10-1.php?idm=<?php echo $idMantel; ?>">
	<h2>Omgaan met andere mensen</h2>
			<h3>Op sociaal gepaste wijze contact maken met bekende en onbekende mensen (respectvol, rekening houden met de situatie, etc.)</h3>
				<div>
					<center><img src="images/G%20-%20Tussenmenselijke%20interacties%20en%20relaties/d710%20-%20op%20sociaal%20gepaste%20wijze%20contact%20maken%20met%20bekende%20en%20onbekende%20mensen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarsociaalgepastewijzecontact1" name="G1a" value="1"><label for="ervaarsociaalgepastewijzecontact1">Verloopt naar wens</label>
							<input type="radio" id="ervaarsociaalgepastewijzecontact2" name="G1a" value="2"><label for="ervaarsociaalgepastewijzecontact2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarsociaalgepastewijzecontact3" name="G1a" value="3"><label for="ervaarsociaalgepastewijzecontact3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarsociaalgepastewijzecontact4" name="G1a" value="4"><label for="ervaarsociaalgepastewijzecontact4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarsociaalgepastewijzecontact5" name="G1a" value="5"><label for="ervaarsociaalgepastewijzecontact5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkensociaalgepastewijzecontact1" name="G1b" value="1"><label for="hieraanwerkensociaalgepastewijzecontact1">Ja</label>
							<input type="radio" id="hieraanwerkensociaalgepastewijzecontact2" name="G1b" value="2"><label for="hieraanwerkensociaalgepastewijzecontact2">Nee</label>
						</div>
					<br>
				</div>
				<a href="mantel-step9-2.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina10 -->
</form>
<?php include("footer.php"); ?>