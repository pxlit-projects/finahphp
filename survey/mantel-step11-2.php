<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "H2a";
$submitVariableB = "H2b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "H3a";
$variableB = "H3b";
$labelA = "ervaarfinancielemogelijkheden";
$labelB = "hieraanwerkenfinancielemogelijkheden";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina11">
<p align="center"><progress value="42" max="53"></progress></p>
<form id="form" method="post" action="mantel-step12.php?idm=<?php echo $idMantel; ?>">
	<h2>Belangrijke levensgebeiden</h2>
			<h3>Financiële mogelijkheden voor jezelf en je gezin</h3>
				<div>
					<center><img src="images/H%20-%20Belangrijke%20levensgebieden/d870%20-%20financi%C3%ABle%20mogelijkheden%20voor%20jezelf%20en%20je%20gezin.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarfinancielemogelijkheden1" name="H3a" value="1"><label for="ervaarfinancielemogelijkheden1">Verloopt naar wens</label>
							<input type="radio" id="ervaarfinancielemogelijkheden2" name="H3a" value="2"><label for="ervaarfinancielemogelijkheden2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarfinancielemogelijkheden3" name="H3a" value="3"><label for="ervaarfinancielemogelijkheden3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarfinancielemogelijkheden4" name="H3a" value="4"><label for="ervaarfinancielemogelijkheden4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarfinancielemogelijkheden5" name="H3a" value="5"><label for="ervaarfinancielemogelijkheden5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenfinancielemogelijkheden1" name="H3b" value="1"><label for="hieraanwerkenfinancielemogelijkheden1">Ja</label>
							<input type="radio" id="hieraanwerkenfinancielemogelijkheden2" name="H3b" value="2"><label for="hieraanwerkenfinancielemogelijkheden2">Nee</label>
						</div>
					<br>
				</div>
				<a href="mantel-step11-1.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina11 -->
</form>
<?php include("footer.php"); ?>