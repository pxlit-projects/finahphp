<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "A5a";
$submitVariableB = "A5b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "A6a";
$variableB = "A6b";
$labelA = "ervaarlezen";
$labelB = "hieraanwerkenlezen";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina3">
<p align="center"><progress value="4" max="53"></progress></p>
<form id="form" method="post" action="mantel-step3-1.php?idm=<?php echo $idMantel; ?>">
	<h2>Leren en toepassen van kennis</h2>
			<h3>Lezen (zoals boeken, instructies, kranten, in tekst of in braille)</h3>
				<div>
					<center><img src="images/A%20-%20leren%20en%20toepassen%20van%20kennis/d166%20-%20lezen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaarlezen1" name="A6a" value="1"><label for="ervaarlezen1">Verloopt naar wens</label>
						<input type="radio" id="ervaarlezen2" name="A6a" value="2"><label for="ervaarlezen2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaarlezen3" name="A6a" value="3"><label for="ervaarlezen3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaarlezen4" name="A6a" value="4"><label for="ervaarlezen4">Probleem - hinderlijk voor cliënt</label>
						<input type="radio" id="ervaarlezen5" name="A6a" value="5"><label for="ervaarlezen5">Probleem - hinderlijk voor beide</label>
					</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenlezen1" name="A6b" value="1"><label for="hieraanwerkenlezen1">Ja</label>
							<input type="radio" id="hieraanwerkenlezen2" name="A6b" value="2"><label for="hieraanwerkenlezen2">Nee</label>
						</div>
					<br>
				</div>
				<a href="mantel-step2-2.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina3 -->
</form>
<?php include("footer.php"); ?>