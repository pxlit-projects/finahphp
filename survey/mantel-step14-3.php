<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "J7a";
$submitVariableB = "J7b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "J8a";
$variableB = "J8b";
$labelA = "ervaarsnellervakermoe";
$labelB = "hieraanwerkensnellervakermoe";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina14">
<p align="center"><progress value="53" max="53"></progress></p>
<form id="form" method="post" action="mantel-result.php?idm=<?php echo $idMantel; ?>">
	<h2>Emotie en gedrag</h2>
			<h3>Sneller en vaker moe</h3>
				<div>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarsnellervakermoe1" name="J8a" value="1"><label for="ervaarsnellervakermoe1">Verloopt naar wens</label>
							<input type="radio" id="ervaarsnellervakermoe2" name="J8a" value="2"><label for="ervaarsnellervakermoe2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarsnellervakermoe3" name="J8a" value="3"><label for="ervaarsnellervakermoe3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarsnellervakermoe4" name="J8a" value="4"><label for="ervaarsnellervakermoe4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarsnellervakermoe5" name="J8a" value="5"><label for="ervaarsnellervakermoe5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
					<div id="radio2">
						<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkensnellervakermoe1" name="J8b" value="1"><label for="hieraanwerkensnellervakermoe1">Ja</label>
							<input type="radio" id="hieraanwerkensnellervakermoe2" name="J8b" value="2"><label for="hieraanwerkensnellervakermoe2">Nee</label>
					</div>
					<br>
				</div>
<a href="mantel-step14-2.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina14 -->        
</form>
<?php include("footer.php"); ?>