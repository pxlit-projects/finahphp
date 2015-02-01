<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "D4a";
$submitVariableB = "D4b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "D5a";
$variableB = "D5b";
$labelA = "ervaarbesturenvanvervoersmiddel";
$labelB = "hieraanwerkenbesturenvanvervoersmiddel";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina7">
<p align="center"><progress value="24" max="53"></progress></p>
<form id="form" method="post" action="mantel-step8.php?idm=<?php echo $idMantel; ?>">
	<h2>Mobiliteit</h2>
			<h3>Besturen van vervoermiddel (zoals de auto of de fiets)</h3>
				<div>
					<center><img src="images/D%20-%20Mobiliteit/d475%20-%20besturen%20van%20vervoermiddel.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarbesturenvanvervoersmiddel1" name="D5a" value="1"><label for="ervaarbesturenvanvervoersmiddel1">Verloopt naar wens</label>
							<input type="radio" id="ervaarbesturenvanvervoersmiddel2" name="D5a" value="2"><label for="ervaarbesturenvanvervoersmiddel2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarbesturenvanvervoersmiddel3" name="D5a" value="3"><label for="ervaarbesturenvanvervoersmiddel3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarbesturenvanvervoersmiddel4" name="D5a" value="4"><label for="ervaarbesturenvanvervoersmiddel4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarbesturenvanvervoersmiddel5" name="D5a" value="5"><label for="ervaarbesturenvanvervoersmiddel5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenbesturenvanvervoersmiddel1" name="D5b" value="1"><label for="hieraanwerkenbesturenvanvervoersmiddel1">Ja</label>
							<input type="radio" id="hieraanwerkenbesturenvanvervoersmiddel2" name="D5b" value="2"><label for="hieraanwerkenbesturenvanvervoersmiddel2">Nee</label>
						</div>
					<br>
				</div>
				<a href="mantel-step7-3.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina7 -->
</form>
<?php include("footer.php"); ?>