<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "A8a";
$submitVariableB = "A8b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "A9a";
$variableB = "A9b";
$labelA = "ervaaroplossenvanproblemen";
$labelB = "hieraanwerkenoplossenvanproblemen";
include("headerscripts.php");
?>
</head><body>
<div id="pagina3">
<p align="center"><progress value="6" max="53"></progress></p>
<form id="form" method="post" action="client-step3-3.php?idc=<?php echo $idPatient; ?>">
<!-- dit formulier is de client versie -->
	<h2>Leren en toepassen van kennis</h2>
			<h3>Oplossen van problemen (zoals een afspraak bij de dokter verzetten, of weten wat je moet doen als er iets stuk gaat in huis)</h3>
				<div>
					<center><img src="images/A%20-%20leren%20en%20toepassen%20van%20kennis/d175%20-%20oplossen%20van%20problemen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaaroplossenvanproblemen1" name="A9a" value="1"><label for="ervaaroplossenvanproblemen1">Verloopt naar wens</label>
						<input type="radio" id="ervaaroplossenvanproblemen2" name="A9a" value="2"><label for="ervaaroplossenvanproblemen2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaaroplossenvanproblemen3" name="A9a" value="3"><label for="ervaaroplossenvanproblemen3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaaroplossenvanproblemen4" name="A9a" value="4"><label for="ervaaroplossenvanproblemen4">Probleem - hinderlijk voor mantelzorger</label>
						<input type="radio" id="ervaaroplossenvanproblemen5" name="A9a" value="5"><label for="ervaaroplossenvanproblemen5">Probleem - hinderlijk voor beide</label>
					</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenoplossenvanproblemen1" name="A9b" value="1"><label for="hieraanwerkenoplossenvanproblemen1">Ja</label>
							<input type="radio" id="hieraanwerkenoplossenvanproblemen2" name="A9b" value="2"><label for="hieraanwerkenoplossenvanproblemen2">Nee</label>
						</div>
					<br>
				</div>
				<a href="client-step3-1.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina3 -->
</form>
<?php include("footer.php"); ?>