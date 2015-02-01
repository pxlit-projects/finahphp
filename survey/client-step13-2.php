<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "J2a";
$submitVariableB = "J2b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "J3a";
$variableB = "J3b";
$labelA = "ervaaronrealistischeverwachtingen";
$labelB = "hieraanwerkenonrealistischeverwachtingen";
include("headerscripts.php");
?>
</head><body>
<div id="pagina13">
<p align="center"><progress value="48" max="53"></progress></p>
<form id="form" method="post" action="client-step13-3.php?idc=<?php echo $idPatient; ?>">
	<h2>Emotie en gedrag</h2>
		<h3>Onrealistische verwachtingen</h3>
				<div>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaaronrealistischeverwachtingen1" name="J3a" value="1"><label for="ervaaronrealistischeverwachtingen1">Verloopt naar wens</label>
							<input type="radio" id="ervaaronrealistischeverwachtingen2" name="J3a" value="2"><label for="ervaaronrealistischeverwachtingen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaaronrealistischeverwachtingen3" name="J3a" value="3"><label for="ervaaronrealistischeverwachtingen3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaaronrealistischeverwachtingen4" name="J3a" value="4"><label for="ervaaronrealistischeverwachtingen4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaaronrealistischeverwachtingen5" name="J3a" value="5"><label for="ervaaronrealistischeverwachtingen5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
				   <div id="radio2">
						<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenonrealistischeverwachtingen1" name="J3b" value="1"><label for="hieraanwerkenonrealistischeverwachtingen1">Ja</label>
							<input type="radio" id="hieraanwerkenonrealistischeverwachtingen2" name="J3b" value="2"><label for="hieraanwerkenonrealistischeverwachtingen2">Nee</label>
						</div>
					<br>
				</div>		
		<a href="client-step13-1.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div>
</form>
<?php include("footer.php"); ?>