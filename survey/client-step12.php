<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "H3a";
$submitVariableB = "H3b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "I1a";
$variableB = "I1b";
$labelA = "ervaardeelnemenmaatschappelijkleven";
$labelB = "hieraanwerkendeelnemenmaatschappelijkleven";
include("headerscripts.php");
?>
</head><body>
<div id="pagina12">	
<p align="center"><progress value="43" max="53"></progress></p>
<form id="form" method="post" action="client-step12-1.php?idc=<?php echo $idPatient; ?>">
	<h2>Maatschappelijk, sociaal en burgerlijk leven</h2>
			<h3>Deelnemen aan het maatschappelijk leven</h3>
				<div>
					<center><img src="images/I%20-%20Maatschappelijk,%20sociaal%20en%20burgerlijk%20leven/d910%20-%20deelnemen%20aan%20het%20maatschappelijk%20leven.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaardeelnemenmaatschappelijkleven1" name="I1a" value="1"><label for="ervaardeelnemenmaatschappelijkleven1">Verloopt naar wens</label>
							<input type="radio" id="ervaardeelnemenmaatschappelijkleven2" name="I1a" value="2"><label for="ervaardeelnemenmaatschappelijkleven2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaardeelnemenmaatschappelijkleven3" name="I1a" value="3"><label for="ervaardeelnemenmaatschappelijkleven3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaardeelnemenmaatschappelijkleven4" name="I1a" value="4"><label for="ervaardeelnemenmaatschappelijkleven4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaardeelnemenmaatschappelijkleven5" name="I1a" value="5"><label for="ervaardeelnemenmaatschappelijkleven5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkendeelnemenmaatschappelijkleven1" name="I1b" value="1"><label for="hieraanwerkendeelnemenmaatschappelijkleven1">Ja</label>
							<input type="radio" id="hieraanwerkendeelnemenmaatschappelijkleven2" name="I1b" value="2"><label for="hieraanwerkendeelnemenmaatschappelijkleven2">Nee</label>
						</div>
					<br>
				</div>	
				<a href="client-step11-2.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina12 -->
</form>
<?php include("footer.php"); ?>