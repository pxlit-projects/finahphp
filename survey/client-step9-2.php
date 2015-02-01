<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "F2a";
$submitVariableB = "F2b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "F3a";
$variableB = "F3b";
$labelA = "ervaarhuishoudendoen";
$labelB = "hieraanwerkenhuishoudendoen";
include("headerscripts.php");
?>
</head><body>
<div id="pagina9">
<p align="center"><progress value="34" max="53"></progress></p>
<form id="form" method="post" action="client-step10.php?idc=<?php echo $idPatient; ?>">
	<h2>Huishouden</h2>
			<h3>Huishouden doen (onderhoud van huis en tuin, schoonmaken, kleren wassen)</h3>
				<div>
					<center><img src="images/F%20-%20Huishouden/d640%20-%20huishouden%20doen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarhuishoudendoen1" name="F3a" value="1"><label for="ervaarhuishoudendoen1">Verloopt naar wens</label>
							<input type="radio" id="ervaarhuishoudendoen2" name="F3a" value="2"><label for="ervaarhuishoudendoen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarhuishoudendoen3" name="F3a" value="3"><label for="ervaarhuishoudendoen3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarhuishoudendoen4" name="F3a" value="4"><label for="ervaarhuishoudendoen4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarhuishoudendoen5" name="F3a" value="5"><label for="ervaarhuishoudendoen5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenhuishoudendoen1" name="F3b" value="1"><label for="hieraanwerkenhuishoudendoen1">Ja</label>
							<input type="radio" id="hieraanwerkenhuishoudendoen2" name="F3b" value="2"><label for="hieraanwerkenhuishoudendoen2">Nee</label>
						</div>
					<br>
				</div>			
				<a href="client-step9-1.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina9 -->			
</form>
<?php include("footer.php"); ?>