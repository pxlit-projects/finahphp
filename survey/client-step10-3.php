<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "G3a";
$submitVariableB = "G3b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "G4a";
$variableB = "G4b";
$labelA = "ervaaromgaanvriendenkennissen";
$labelB = "hieraanwerkenomgaanvriendenkennissen";
include("headerscripts.php");
?>
</head><body>
<div id="pagina10">	
<p align="center"><progress value="38" max="53"></progress></p>
<form id="form" method="post" action="client-step10-4.php?idc=<?php echo $idPatient; ?>">
	<h2>Omgaan met andere mensen</h2>
			<h3>Omgaan met vrienden en kennissen</h3>
				<div>
					<center><img src="images/G%20-%20Tussenmenselijke%20interacties%20en%20relaties/d750%20-%20omgaan%20met%20vrienden%20en%20kennissen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaaromgaanvriendenkennissen1" name="G4a" value="1"><label for="ervaaromgaanvriendenkennissen1">Verloopt naar wens</label>
							<input type="radio" id="ervaaromgaanvriendenkennissen2" name="G4a" value="2"><label for="ervaaromgaanvriendenkennissen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaaromgaanvriendenkennissen3" name="G4a" value="3"><label for="ervaaromgaanvriendenkennissen3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaaromgaanvriendenkennissen4" name="G4a" value="4"><label for="ervaaromgaanvriendenkennissen4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaaromgaanvriendenkennissen5" name="G4a" value="5"><label for="ervaaromgaanvriendenkennissen5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenomgaanvriendenkennissen1" name="G4b" value="1"><label for="hieraanwerkenomgaanvriendenkennissen1">Ja</label>
							<input type="radio" id="hieraanwerkenomgaanvriendenkennissen2" name="G4b" value="2"><label for="hieraanwerkenomgaanvriendenkennissen2">Nee</label>
						</div>
					<br>
				</div>
				<a href="client-step10-2.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina10 -->
</form>
<?php include("footer.php"); ?>