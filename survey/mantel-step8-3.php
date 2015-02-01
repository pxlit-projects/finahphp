<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "E3a";
$submitVariableB = "E3b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "E4a";
$variableB = "E4b";
$labelA = "ervaarzichaankleden";
$labelB = "hieraanwerkenzichaankleden";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina8">
<p align="center"><progress value="28" max="53"></progress></p>
<form id="form" method="post" action="mantel-step8-4.php?idm=<?php echo $idMantel; ?>">
	<h2>Zelfverzorging</h2>
			<h3>Zich aankleden</h3>
				<div>
					<center><img src="images/E%20-%20Zelfverzorging/d540%20-%20zich%20aankleden.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarzichaankleden1" name="E4a" value="1"><label for="ervaarzichaankleden1">Verloopt naar wens</label>
							<input type="radio" id="ervaarzichaankleden2" name="E4a" value="2"><label for="ervaarzichaankleden2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarzichaankleden3" name="E4a" value="3"><label for="ervaarzichaankleden3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarzichaankleden4" name="E4a" value="4"><label for="ervaarzichaankleden4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarzichaankleden5" name="E4a" value="5"><label for="ervaarzichaankleden5">Probleem - hinderlijk voor beide</label>
						</div>
				<br>
					<div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
						<input type="radio" id="hieraanwerkenzichaankleden1" name="E4b" value="1"><label for="hieraanwerkenzichaankleden1">Ja</label>
						<input type="radio" id="hieraanwerkenzichaankleden2" name="E4b" value="2"><label for="hieraanwerkenzichaankleden2">Nee</label>
					</div>
					<br>
				</div>
				<a href="mantel-step8-2.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina8 -->
</form>
<?php include("footer.php"); ?>