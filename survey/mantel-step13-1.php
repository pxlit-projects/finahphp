<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "J1a";
$submitVariableB = "J1b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "J2a";
$variableB = "J2b";
$labelA = "ervaarangstgevoelens";
$labelB = "hieraanwerkenangstgevoelens";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina13">
<p align="center"><progress value="47" max="53"></progress></p>
<form id="form" method="post" action="mantel-step13-2.php?idm=<?php echo $idMantel; ?>">
	<h2>Emotie en gedrag</h2>
			<h3>Angstgevoelens</h3>
				<div>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarangstgevoelens1" name="J2a" value="1"><label for="ervaarangstgevoelens1">Verloopt naar wens</label>
							<input type="radio" id="ervaarangstgevoelens2" name="J2a" value="2"><label for="ervaarangstgevoelens2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarangstgevoelens3" name="J2a" value="3"><label for="ervaarangstgevoelens3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarangstgevoelens4" name="J2a" value="4"><label for="ervaarangstgevoelens4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarangstgevoelens5" name="J2a" value="5"><label for="ervaarangstgevoelens5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenangstgevoelens1" name="J2b" value="1"><label for="hieraanwerkenangstgevoelens1">Ja</label>
							<input type="radio" id="hieraanwerkenangstgevoelens2" name="J2b" value="2"><label for="hieraanwerkenangstgevoelens2">Nee</label>
						</div>
					<br>
				</div>
		<a href="mantel-step13.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">	
</div> <!-- einde pagina13 -->
</form>
<?php include("footer.php"); ?>