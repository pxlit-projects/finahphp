<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "A9a";
$submitVariableB = "A9b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "A10a";
$variableB = "A10b";
$labelA = "ervaarbeslissingennemen";
$labelB = "hieraanwerkenbeslissingennemen";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina3">
<p align="center"><progress value="7" max="53"></progress></p>
<form id="form" method="post" action="mantel-step4.php?idm=<?php echo $idMantel; ?>">
	<h2>Leren en toepassen van kennis</h2>
			<h3>Keuzes maken (zoals kiezen wat je wil eten, welk TV-programma je wil zien)</h3>
				<div>
					<center><img src="images/A%20-%20leren%20en%20toepassen%20van%20kennis/d177%20-%20beslissingen%20nemen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaarbeslissingennemen1" name="A10a" value="1"><label for="ervaarbeslissingennemen1">Verloopt naar wens</label>
						<input type="radio" id="ervaarbeslissingennemen2" name="A10a" value="2"><label for="ervaarbeslissingennemen2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaarbeslissingennemen3" name="A10a" value="3"><label for="ervaarbeslissingennemen3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaarbeslissingennemen4" name="A10a" value="4"><label for="ervaarbeslissingennemen4">Probleem - hinderlijk voor cliënt</label>
						<input type="radio" id="ervaarbeslissingennemen5" name="A10a" value="5"><label for="ervaarbeslissingennemen5">Probleem - hinderlijk voor beide</label>
					</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenbeslissingennemen1" name="A10b" value="1"><label for="hieraanwerkenbeslissingennemen1">Ja</label>
							<input type="radio" id="hieraanwerkenbeslissingennemen2" name="A10b" value="2"><label for="hieraanwerkenbeslissingennemen2">Nee</label>
						</div>
					<br>
				</div>
				<a href="mantel-step3-2.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina3 -->
</form>
<?php include("footer.php"); ?>