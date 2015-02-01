<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "G1a";
$submitVariableB = "G1b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "G2a";
$variableB = "G2b";
$labelA = "ervaarintiemerelaties";
$labelB = "hieraanwerkenintiemerelaties";
include("headerscripts.php");
?>
</head><body>
<div id="pagina10">	
<p align="center"><progress value="36" max="53"></progress></p>
<form id="form" method="post" action="client-step10-2.php?idc=<?php echo $idPatient; ?>">
	<h2>Omgaan met andere mensen</h2>
			<h3>Intieme relaties</h3>
				<div>
					<center><img src="images/G%20-%20Tussenmenselijke%20interacties%20en%20relaties/d770%20-%20intieme%20relaties.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarintiemerelaties1" name="G2a" value="1"><label for="ervaarintiemerelaties1">Verloopt naar wens</label>
							<input type="radio" id="ervaarintiemerelaties2" name="G2a" value="2"><label for="ervaarintiemerelaties2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarintiemerelaties3" name="G2a" value="3"><label for="ervaarintiemerelaties3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarintiemerelaties4" name="G2a" value="4"><label for="ervaarintiemerelaties4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaarintiemerelaties5" name="G2a" value="5"><label for="ervaarintiemerelaties5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenintiemerelaties1" name="G2b" value="1"><label for="hieraanwerkenintiemerelaties1">Ja</label>
							<input type="radio" id="hieraanwerkenintiemerelaties2" name="G2b" value="2"><label for="hieraanwerkenintiemerelaties2">Nee</label>
						</div>
					<br>
				</div>
				<a href="client-step10.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina10 -->
</form>
<?php include("footer.php"); ?>