<?php 
include("headerclient.php");
//variable voor save van vorige pagina
$submitVariableA = "E4a";
$submitVariableB = "E4b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "E5a";
$variableB = "E5b";
$labelA = "ervaareten";
$labelB = "hieraanwerkeneten";
include("headerscripts.php");
?>
</head><body>
<div id="pagina8">
<p align="center"><progress value="29" max="53"></progress></p>
<form id="form" method="post" action="client-step8-5.php?idc=<?php echo $idPatient; ?>">
	<h2>Zelfverzorging</h2>
			<h3>Eten</h3>
				<div>
					<center><img src="images/E%20-%20Zelfverzorging/d550%20-%20eten.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaareten1" name="E5a" value="1"><label for="ervaareten1">Verloopt naar wens</label>
							<input type="radio" id="ervaareten2" name="E5a" value="2"><label for="ervaareten2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaareten3" name="E5a" value="3"><label for="ervaareten3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaareten4" name="E5a" value="4"><label for="ervaareten4">Probleem - hinderlijk voor mantelzorger</label>
							<input type="radio" id="ervaareten5" name="E5a" value="5"><label for="ervaareten5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkeneten1" name="E5b" value="1"><label for="hieraanwerkeneten1">Ja</label>
							<input type="radio" id="hieraanwerkeneten2" name="E5b" value="2"><label for="hieraanwerkeneten2">Nee</label>
						</div>
					<br>
				</div>			
		<a href="client-step8-3.php?idc=<?php echo $idPatient; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" id="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina8 -->
</form>
<?php include("footer.php"); ?>