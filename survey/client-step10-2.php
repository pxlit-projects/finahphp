<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "G2a";
$submitVariableB = "G2b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "G3a";
$variableB = "G3b";
$labelA = "ervaaromgaanfamilieleden";
$labelB = "hieraanwerkenomgaanfamilieleden";
include("headerscripts.php");
?>
</head><body>
<div id="pagina10">	
<p align="center"><progress value="37" max="53"></progress></p>
<form id="form" method="post" action="client-step10-3.php?idc=<?php echo $idPatient; ?>">
	<h2>Omgaan met andere mensen</h2>
			<h3>Omgaan met familieleden</h3>
				<div>
					<center><img src="images/G%20-%20Tussenmenselijke%20interacties%20en%20relaties/d760%20-%20omgaan%20met%20familieleden.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaaromgaanfamilieleden1" name="G3a" value="1"><label for="ervaaromgaanfamilieleden1">Verloopt naar wens</label>
							<input type="radio" id="ervaaromgaanfamilieleden2" name="G3a" value="2"><label for="ervaaromgaanfamilieleden2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaaromgaanfamilieleden3" name="G3a" value="3"><label for="ervaaromgaanfamilieleden3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaaromgaanfamilieleden4" name="G3a" value="4"><label for="ervaaromgaanfamilieleden4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaaromgaanfamilieleden5" name="G3a" value="5"><label for="ervaaromgaanfamilieleden5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenomgaanfamilieleden1" name="G3b" value="1"><label for="hieraanwerkenomgaanfamilieleden1">Ja</label>
							<input type="radio" id="hieraanwerkenomgaanfamilieleden2" name="G3b" value="2"><label for="hieraanwerkenomgaanfamilieleden2">Nee</label>
						</div>
					<br>
				</div>
				<a href="client-step10-1.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina10 -->
</form>
<?php include("footer.php"); ?>