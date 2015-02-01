<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "I2a";
$submitVariableB = "I2b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "I3a";
$variableB = "I3b";
$labelA = "ervaarreligiespiritualiteit";
$labelB = "hieraanwerkenreligiespiritualiteit";
include("headerscripts.php");
?>
</head><body>
<div id="pagina12">	
<p align="center"><progress value="45" max="53"></progress></p>
<form id="form" method="post" action="client-step13.php?idc=<?php echo $idPatient; ?>">
	<h2>Maatschappelijk, sociaal en burgerlijk leven</h2>
			<h3>Religie en spiritualiteit</h3>
				<div>
					<center><img src="images/I%20-%20Maatschappelijk,%20sociaal%20en%20burgerlijk%20leven/d930%20-%20religie%20en%20spiritualiteit.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarreligiespiritualiteit1" name="I3a" value="1"><label for="ervaarreligiespiritualiteit1">Verloopt naar wens</label>
							<input type="radio" id="ervaarreligiespiritualiteit2" name="I3a" value="2"><label for="ervaarreligiespiritualiteit2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarreligiespiritualiteit3" name="I3a" value="3"><label for="ervaarreligiespiritualiteit3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarreligiespiritualiteit4" name="I3a" value="4"><label for="ervaarreligiespiritualiteit4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarreligiespiritualiteit5" name="I3a" value="5"><label for="ervaarreligiespiritualiteit5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenreligiespiritualiteit1" name="I3b" value="1"><label for="hieraanwerkenreligiespiritualiteit1">Ja</label>
							<input type="radio" id="hieraanwerkenreligiespiritualiteit2" name="I3b" value="2"><label for="hieraanwerkenreligiespiritualiteit2">Nee</label>
						</div>
					<br>
				</div>		
				<a href="client-step12-1.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div>
</form>
<?php include("footer.php"); ?>