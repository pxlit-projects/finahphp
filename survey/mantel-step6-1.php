<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "C5a";
$submitVariableB = "C5b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "C6a";
$variableB = "C6b";
$labelA = "ervaarschrijvenvanboodschappen";
$labelB = "hieraanwerkenschrijvenvanboodschappen";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina6">
<p align="center"><progress value="17" max="53"></progress></p>
<form id="form" method="post" action="mantel-step6-2.php?idm=<?php echo $idMantel; ?>">
	<h2>Communicatie</h2>
			<h3>Schrijven van berichten (bijv. een boodschappenlijstje maken, een e-mail schrijven)</h3>
				<div>
					<center><img src="images/C%20-%20Communicatie/d345%20-%20schrijven%20van%20boodschappen.jpg"></center>
					<br>				
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarschrijvenvanboodschappen1" name="C6a" value="1"><label for="ervaarschrijvenvanboodschappen1">Verloopt naar wens</label>
							<input type="radio" id="ervaarschrijvenvanboodschappen2" name="C6a" value="2"><label for="ervaarschrijvenvanboodschappen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarschrijvenvanboodschappen3" name="C6a" value="3"><label for="ervaarschrijvenvanboodschappen3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarschrijvenvanboodschappen4" name="C6a" value="4"><label for="ervaarschrijvenvanboodschappen4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarschrijvenvanboodschappen5" name="C6a" value="5"><label for="ervaarschrijvenvanboodschappen5">Probleem - hinderlijk voor beide</label>
						</div>
					<br>
					<div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenschrijvenvanboodschappen1" name="C6b" value="1"><label for="hieraanwerkenschrijvenvanboodschappen1">Ja</label>
							<input type="radio" id="hieraanwerkenschrijvenvanboodschappen2" name="C6b" value="2"><label for="hieraanwerkenschrijvenvanboodschappen2">Nee</label>
						</div>
				</div>
			<a href="mantel-step6.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina6 -->
</form>
<?php include("footer.php"); ?>