<?php 
include("headerclient.php");
//variable voor opbouw nieuwe-huidige pagina
$labelA = "ervaardenken";
$labelB = "hieraanwerkendenken";
$variableA = "A5a";
$variableB = "A5b";
//variable voor save van vorige pagina
$submitVariableA = "A4a";
$submitVariableB = "A4b";
include("headerscripts.php");
?>
</head><body>
<div id="pagina2">
<p align="center"><progress value="3" max="53"></progress></p>
<form id="form" method="post" action="client-step3.php?idc=<?php echo $idPatient; ?>">
	<h2>Leren en toepassen van kennis</h2>
			<h3>Denken (zoals fantaseren, een mening vormen, met ideeën spelen, of nadenken)</h3>
				<div>
					<center><img src="images/A%20-%20leren%20en%20toepassen%20van%20kennis/d163%20-%20denken.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaardenken1" name="A5a" value="1"><label for="ervaardenken1">Verloopt naar wens</label>
						<input type="radio" id="ervaardenken2" name="A5a" value="2"><label for="ervaardenken2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaardenken3" name="A5a" value="3"><label for="ervaardenken3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaardenken4" name="A5a" value="4"><label for="ervaardenken4">Probleem - hinderlijk voor mantelzorger</label>
						<input type="radio" id="ervaardenken5" name="A5a" value="5"><label for="ervaardenken5">Probleem - hinderlijk voor beide</label>
					</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkendenken1" name="A5b" value="1"><label for="hieraanwerkendenken1">Ja</label>
							<input type="radio" id="hieraanwerkendenken2" name="A5b" value="2"><label for="hieraanwerkendenken2">Nee</label>
						</div>
					<br>
				</div>
		<a href="client-step2-1.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina2 -->
</form>
<?php include("footer.php"); ?>