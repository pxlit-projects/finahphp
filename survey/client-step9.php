<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "E7a";
$submitVariableB = "E7b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "F1a";
$variableB = "F1b";
$labelA = "ervaargaanwinkelen";
$labelB = "hieraanwerkengaanwinkelen";
include("headerscripts.php");
?>
</head><body>
<div id="pagina9">
<p align="center"><progress value="32" max="53"></progress></p>
<form id="form" method="post" action="client-step9-1.php?idc=<?php echo $idPatient; ?>">
	<h2>Huishouden</h2>
			<h3>Gaan winkelen</h3>
				<div>
					<center><img src="images/F%20-%20Huishouden/d620%20-%20gaan%20winkelen.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaargaanwinkelen1" name="F1a" value="1"><label for="ervaargaanwinkelen1">Verloopt naar wens</label>
							<input type="radio" id="ervaargaanwinkelen2" name="F1a" value="2"><label for="ervaargaanwinkelen2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaargaanwinkelen3" name="F1a" value="3"><label for="ervaargaanwinkelen3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaargaanwinkelen4" name="F1a" value="4"><label for="ervaargaanwinkelen4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaargaanwinkelen5" name="F1a" value="5"><label for="ervaargaanwinkelen5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkengaanwinkelen1" name="F1b" value="1"><label for="hieraanwerkengaanwinkelen1">Ja</label>
							<input type="radio" id="hieraanwerkengaanwinkelen2" name="F1b" value="2"><label for="hieraanwerkengaanwinkelen2">Nee</label>
						</div>
					<br>
				</div>		
				<a href="client-step8-6.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina9 -->			
</form>
<?php include("footer.php"); ?>