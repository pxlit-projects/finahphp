<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "F1a";
$submitVariableB = "F1b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "F2a";
$variableB = "F2b";
$labelA = "ervaarbereidenmaaltijden";
$labelB = "hieraanwerkenbereidenmaaltijden";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina9">
<p align="center"><progress value="33" max="53"></progress></p>
<form id="form" method="post" action="mantel-step9-2.php?idm=<?php echo $idMantel; ?>">
	<h2>Huishouden</h2>
			<h3>Bereiden van maaltijden</h3>
				<div>
					<center><img src="images/F%20-%20Huishouden/d630%20-%20bereiden%20van%20maaltijden.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarbereidenmaaltijden1" name="F2a" value="1"><label for="ervaarbereidenmaaltijden1">Verloopt naar wens</label>
							<input type="radio" id="ervaarbereidenmaaltijden2" name="F2a" value="2"><label for="ervaarbereidenmaaltijden2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarbereidenmaaltijden3" name="F2a" value="3"><label for="ervaarbereidenmaaltijden3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarbereidenmaaltijden4" name="F2a" value="4"><label for="ervaarbereidenmaaltijden4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarbereidenmaaltijden5" name="F2a" value="5"><label for="ervaarbereidenmaaltijden5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenbereidenmaaltijden1" name="F2b" value="1"><label for="hieraanwerkenbereidenmaaltijden1">Ja</label>
							<input type="radio" id="hieraanwerkenbereidenmaaltijden2" name="F2b" value="2"><label for="hieraanwerkenbereidenmaaltijden2">Nee</label>
						</div>
					<br>
				</div>	
				<a href="mantel-step9.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina9 -->			
</form>
<?php include("footer.php"); ?>