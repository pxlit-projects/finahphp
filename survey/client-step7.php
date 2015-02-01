<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "C8a";
$submitVariableB = "C8b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "D1a";
$variableB = "D1b";
$labelA = "ervaarzichbewegenenverplaatsen";
$labelB = "hieraanwerkenzichbewegenenverplaatsen";
include("headerscripts.php");
?>
</head><body>
<div id="pagina7">
<p align="center"><progress value="20" max="53"></progress></p>
<form id="form" method="post" action="client-step7-1.php?idc=<?php echo $idPatient; ?>">
	<h2>Mobiliteit</h2>
			<h3>Zich kunnen bewegen en verplaatsen, met of zonder gebruik van hulpmiddelen zoals rolstoel, wandelstok of rollator (bijv. uit bed komen, wandelen, opstaan uit stoel)</h3>
				<div>
					<center><img src="images/D%20-%20Mobiliteit/d450%20-%20zich%20kunnen%20bewegen%20en%20verplaatsen%20met%20of%20zonder%20gebruik%20van%20hulpmiddelen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarzichbewegenenverplaatsen1" name="D1a" value="1"><label for="ervaarzichbewegenenverplaatsen1">Verloopt naar wens</label>
							<input type="radio" id="ervaarzichbewegenenverplaatsen2" name="D1a" value="2"><label for="ervaarzichbewegenenverplaatsen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarzichbewegenenverplaatsen3" name="D1a" value="3"><label for="ervaarzichbewegenenverplaatsen3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarzichbewegenenverplaatsen4" name="D1a" value="4"><label for="ervaarzichbewegenenverplaatsen4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarzichbewegenenverplaatsen5" name="D1a" value="5"><label for="ervaarzichbewegenenverplaatsen5">Probleem - hinderlijk voor beide</label>
						</div>
				<br>
				<div id="radio2">
				<h4>Wilt u dat we hieraan werken?</h4>
				<br>
					<input type="radio" id="hieraanwerkenzichbewegenenverplaatsen1" name="D1b" value="1"><label for="hieraanwerkenzichbewegenenverplaatsen1">Ja</label>
					<input type="radio" id="hieraanwerkenzichbewegenenverplaatsen2" name="D1b" value="2"><label for="hieraanwerkenzichbewegenenverplaatsen2">Nee</label>
				</div>
					<br>
				</div>
				<a href="client-step6-3.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina7 -->
</form>
<?php include("footer.php"); ?>