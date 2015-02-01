<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "E5a";
$submitVariableB = "E5b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "E6a";
$variableB = "E6b";
$labelA = "ervaardrinken";
$labelB = "hieraanwerkendrinken";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina8">
<p align="center"><progress value="30" max="53"></progress></p>
<form id="form" method="post" action="mantel-step8-6.php?idm=<?php echo $idMantel; ?>">
	<h2>Zelfverzorging</h2>
			<h3>Drinken</h3>
				<div>
					<center><img src="images/E%20-%20Zelfverzorging/d560%20-%20drinken.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaardrinken1" name="E6a" value="1"><label for="ervaardrinken1">Verloopt naar wens</label>
							<input type="radio" id="ervaardrinken2" name="E6a" value="2"><label for="ervaardrinken2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaardrinken3" name="E6a" value="3"><label for="ervaardrinken3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaardrinken4" name="E6a" value="4"><label for="ervaardrinken4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaardrinken5" name="E6a" value="5"><label for="ervaardrinken5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkendrinken1" name="E6b" value="1"><label for="hieraanwerkendrinken1">Ja</label>
							<input type="radio" id="hieraanwerkendrinken2" name="E6b" value="2"><label for="hieraanwerkendrinken2">Nee</label>
						</div>
					<br>
				</div>
				<a href="mantel-step8-4.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina8 -->
</form>
<?php include("footer.php"); ?>