<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "D2a";
$submitVariableB = "D2b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "D3a";
$variableB = "D3b";
$labelA = "ervaarnauwkeuriggebruikenhanden";
$labelB = "hieraanwerkennauwkeuriggebruikenhanden";
include("headerscripts.php");
?>
</head><body>
<div id="pagina7">
<p align="center"><progress value="22" max="53"></progress></p>
<form id="form" method="post" action="client-step7-3.php?idc=<?php echo $idPatient; ?>">
	<h2>Mobiliteit</h2>
			<h3>Nauwkeurig gebruiken van handen (kleine bewegingen zoals grijpen en loslaten, schrijven, gebruik van sleutels of GSM, iets snijden met een mes)</h3>
				<div>
					<center><img src="images/D%20-%20Mobiliteit/d440%20-%20nauwkeurig%20gebruiken%20van%20handen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarnauwkeuriggebruikenhanden1" name="D3a" value="1"><label for="ervaarnauwkeuriggebruikenhanden1">Verloopt naar wens</label>
							<input type="radio" id="ervaarnauwkeuriggebruikenhanden2" name="D3a" value="2"><label for="ervaarnauwkeuriggebruikenhanden2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarnauwkeuriggebruikenhanden3" name="D3a" value="3"><label for="ervaarnauwkeuriggebruikenhanden3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarnauwkeuriggebruikenhanden4" name="D3a" value="4"><label for="ervaarnauwkeuriggebruikenhanden4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarnauwkeuriggebruikenhanden5" name="D3a" value="5"><label for="ervaarnauwkeuriggebruikenhanden5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkennauwkeuriggebruikenhanden1" name="D3b" value="1"><label for="hieraanwerkennauwkeuriggebruikenhanden1">Ja</label>
							<input type="radio" id="hieraanwerkennauwkeuriggebruikenhanden2" name="D3b" value="2"><label for="hieraanwerkennauwkeuriggebruikenhanden2">Nee</label>
						</div>
					<br>
				</div>
				<a href="client-step7-1.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina7 -->
</form>
<?php include("footer.php"); ?>