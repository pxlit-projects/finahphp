<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "J4a";
$submitVariableB = "J4b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "J5a";
$variableB = "J5b";
$labelA = "ervaarsnellergeirriteerdenprikkelbaar";
$labelB = "hieraanwerkensnellergeirriteerdenprikkelbaar";
include("headerscripts.php");
?>
</head><body>
<div id="pagina14">	
<p align="center"><progress value="50" max="53"></progress></p>
<form id="form" method="post" action="client-step14-1.php?idc=<?php echo $idPatient; ?>">
	<h2>Emotie en gedrag</h2>
		<h3>Sneller geïrriteerd en prikkelbaar</h3>
				<div>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarsnellergeirriteerdenprikkelbaar1" name="J5a" value="1"><label for="ervaarsnellergeirriteerdenprikkelbaar1">Verloopt naar wens</label>
							<input type="radio" id="ervaarsnellergeirriteerdenprikkelbaar2" name="J5a" value="2"><label for="ervaarsnellergeirriteerdenprikkelbaar2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarsnellergeirriteerdenprikkelbaar3" name="J5a" value="3"><label for="ervaarsnellergeirriteerdenprikkelbaar3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarsnellergeirriteerdenprikkelbaar4" name="J5a" value="4"><label for="ervaarsnellergeirriteerdenprikkelbaar4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarsnellergeirriteerdenprikkelbaar5" name="J5a" value="5"><label for="ervaarsnellergeirriteerdenprikkelbaar5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
						<div id="radio2">
							<h4>Wilt u dat we hieraan werken?</h4>
								<input type="radio" id="hieraanwerkensnellergeirriteerdenprikkelbaar1" name="J5b" value="1"><label for="hieraanwerkensnellergeirriteerdenprikkelbaar1">Ja</label>
								<input type="radio" id="hieraanwerkensnellergeirriteerdenprikkelbaar2" name="J5b" value="2"><label for="hieraanwerkensnellergeirriteerdenprikkelbaar2">Nee</label>
						</div>
					<br>
				</div>		
				<a href="client-step13-3.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina14 -->     
</form>

<?php include("footer.php"); ?>