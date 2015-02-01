<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "J6a";
$submitVariableB = "J6b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "J7a";
$variableB = "J7b";
$labelA = "ervaarontremmingproblemencontrolegedrag";
$labelB = "hieraanwerkenontremmingproblemencontrolegedrag";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina14">
<p align="center"><progress value="52" max="53"></progress></p>
<form id="form" method="post" action="mantel-step14-3.php?idm=<?php echo $idMantel; ?>">
	<h2>Emotie en gedrag</h2>
			<h3>Ontremming en problemen met controle van gedrag (zoals het maken van ongepaste opmerkingen, overmatig eten,…)</h3>
				<div>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarontremmingproblemencontrolegedrag1" name="J7a" value="1"><label for="ervaarontremmingproblemencontrolegedrag1">Verloopt naar wens</label>
							<input type="radio" id="ervaarontremmingproblemencontrolegedrag2" name="J7a" value="2"><label for="ervaarontremmingproblemencontrolegedrag2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarontremmingproblemencontrolegedrag3" name="J7a" value="3"><label for="ervaarontremmingproblemencontrolegedrag3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarontremmingproblemencontrolegedrag4" name="J7a" value="4"><label for="ervaarontremmingproblemencontrolegedrag4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarontremmingproblemencontrolegedrag5" name="J7a" value="5"><label for="ervaarontremmingproblemencontrolegedrag5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
					<div id="radio2">
						<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenontremmingproblemencontrolegedrag1" name="J7b" value="1"><label for="hieraanwerkenontremmingproblemencontrolegedrag1">Ja</label>
							<input type="radio" id="hieraanwerkenontremmingproblemencontrolegedrag2" name="J7b" value="2"><label for="hieraanwerkenontremmingproblemencontrolegedrag2">Nee</label>
					</div>
					<br>
				</div>
<a href="mantel-step14-1.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina14 -->        
</form>
<?php include("footer.php"); ?>