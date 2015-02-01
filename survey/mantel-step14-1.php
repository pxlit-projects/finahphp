<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "J5a";
$submitVariableB = "J5b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "J6a";
$variableB = "J6b";
$labelA = "ervaaronverschilligheid";
$labelB = "hieraanwerkenonverschilligheid";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina14">
<p align="center"><progress value="51" max="53"></progress></p>
<form id="form" method="post" action="mantel-step14-2.php?idm=<?php echo $idMantel; ?>">
	<h2>Emotie en gedrag</h2>
			<h3>Onverschilligheid</h3>
				<div>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaaronverschilligheid1" name="J6a" value="1"><label for="ervaaronverschilligheid1">Verloopt naar wens</label>
							<input type="radio" id="ervaaronverschilligheid2" name="J6a" value="2"><label for="ervaaronverschilligheid2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaaronverschilligheid3" name="J6a" value="3"><label for="ervaaronverschilligheid3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaaronverschilligheid4" name="J6a" value="4"><label for="ervaaronverschilligheid4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaaronverschilligheid5" name="J6a" value="5"><label for="ervaaronverschilligheid5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   		<div id="radio2">
						<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenonverschilligheid1" name="J6b" value="1"><label for="hieraanwerkenonverschilligheid1">Ja</label>
							<input type="radio" id="hieraanwerkenonverschilligheid2" name="J6b" value="2"><label for="hieraanwerkenonverschilligheid2">Nee</label>
					</div>
					<br>
				</div>
<a href="mantel-step14.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina14 -->        
</form>
<?php include("footer.php"); ?>