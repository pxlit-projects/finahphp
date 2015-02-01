<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "D1a";
$submitVariableB = "D1b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "D2a";
$variableB = "D2b";
$labelA = "ervaargebruikhandenarm";
$labelB = "hieraanwerkengebruikhandenarm";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina7">
<p align="center"><progress value="21" max="53"></progress></p>
<form id="form" method="post" action="mantel-step7-2.php?idm=<?php echo $idMantel; ?>">
	<h2>Mobiliteit</h2>
			<h3>Gebruiken van hand en arm (grote bewegingen, zoals voorwerpen optillen en meenemen)</h3>
				<div>
					<center><img src="images/D%20-%20Mobiliteit/d445%20-%20gebruiken%20van%20hand%20en%20arm.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaargebruikhandenarm1" name="D2a" value="1"><label for="ervaargebruikhandenarm1">Verloopt naar wens</label>
							<input type="radio" id="ervaargebruikhandenarm2" name="D2a" value="2"><label for="ervaargebruikhandenarm2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaargebruikhandenarm3" name="D2a" value="3"><label for="ervaargebruikhandenarm3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaargebruikhandenarm4" name="D2a" value="4"><label for="ervaargebruikhandenarm4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaargebruikhandenarm5" name="D2a" value="5"><label for="ervaargebruikhandenarm5">Probleem - hinderlijk voor beide</label>
						</div>
				   <br>
				   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkengebruikhandenarm1" name="D2b" value="1"><label for="hieraanwerkengebruikhandenarm1">Ja</label>
							<input type="radio" id="hieraanwerkengebruikhandenarm2" name="D2b" value="2"><label for="hieraanwerkengebruikhandenarm2">Nee</label>
						</div>
					<br>
				</div>
				<a href="mantel-step7.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina7 -->
</form>
<?php include("footer.php"); ?>