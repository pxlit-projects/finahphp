<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "D5a";
$submitVariableB = "D5b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "E1a";
$variableB = "E1b";
$labelA = "ervaarzichwassen";
$labelB = "hieraanwerkenzichwassen";
include("headerscripts.php");
?>
</head><body>
<div id="pagina8">
<p align="center"><progress value="25" max="53"></progress></p>
<form id="form" method="post" action="client-step8-1.php?idc=<?php echo $idPatient; ?>">
	<h2>Zelfverzorging</h2>
			<h3>Zich wassen</h3>
				<div>
					<center><img src="images/E%20-%20Zelfverzorging/d510%20-%20zich%20wassen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarzichwassen1" name="E1a" value="1"><label for="ervaarzichwassen1">Verloopt naar wens</label>
							<input type="radio" id="ervaarzichwassen2" name="E1a" value="2"><label for="ervaarzichwassen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarzichwassen3" name="E1a" value="3"><label for="ervaarzichwassen3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarzichwassen4" name="E1a" value="4"><label for="ervaarzichwassen4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarzichwassen5" name="E1a" value="5"><label for="ervaarzichwassen5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenzichwassen1" name="E1b" value="1"><label for="hieraanwerkenzichwassen1">Ja</label>
							<input type="radio" id="hieraanwerkenzichwassen2" name="E1b" value="2"><label for="hieraanwerkenzichwassen2">Nee</label>
						</div>
					<br>
				</div>
		<a href="client-step7-4.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina8 -->
</form>
<?php include("footer.php"); ?>