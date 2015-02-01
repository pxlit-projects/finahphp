<?php 
include("headermantel.php");
//variable voor save van vorige pagina
$submitVariableA = "H1a";
$submitVariableB = "H1b";
//variable voor opbouw nieuwe-huidige pagina
$variableA = "H2a";
$variableB = "H2b";
$labelA = "ervaarwerkenzinvolledagbesteding";
$labelB = "hieraanwerkenwerkenzinvolledagbesteding";
include("headerscriptsmantel.php");
?>
</head><body>
<div id="pagina11">
<p align="center"><progress value="41" max="53"></progress></p>
<form id="form" method="post" action="mantel-step11-2.php?idm=<?php echo $idMantel; ?>">
	<h2>Belangrijke levensgebeiden</h2>
			<h3>Werken of andere zinvolle dagbesteding (zoals vrijwilligerswerk, het huishouden) </h3>
				<div>
					<center><table><tbody><tr><td><p><img src="images/H%20-%20Belangrijke%20levensgebieden/d850%20-%20werken%20of%20andere%20zinvolle%20dagbesteding.jpg" /></p>
								</td><td><p><img src="images/H%20-%20Belangrijke%20levensgebieden/d855%20-%20werken%20of%20andere%20zinvolle%20dagbesteding.jpg" /></p>
								</td></tr></tbody></table></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
						<div id="radio1">
							<input type="radio" id="ervaarwerkenzinvolledagbesteding1" name="H2a" value="1"><label for="ervaarwerkenzinvolledagbesteding1">Verloopt naar wens</label>
							<input type="radio" id="ervaarwerkenzinvolledagbesteding2" name="H2a" value="2"><label for="ervaarwerkenzinvolledagbesteding2">Probleem - niet hinderlijk</label>
							<input type="radio" id="ervaarwerkenzinvolledagbesteding3" name="H2a" value="3"><label for="ervaarwerkenzinvolledagbesteding3">Probleem - hinderlijk voor mij</label>
							<input type="radio" id="ervaarwerkenzinvolledagbesteding4" name="H2a" value="4"><label for="ervaarwerkenzinvolledagbesteding4">Probleem - hinderlijk voor cliënt</label>
							<input type="radio" id="ervaarwerkenzinvolledagbesteding5" name="H2a" value="5"><label for="ervaarwerkenzinvolledagbesteding5">Probleem - hinderlijk voor beide</label>
						</div>
			   <br>
			   <div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenwerkenzinvolledagbesteding1" name="H2b" value="1"><label for="hieraanwerkenwerkenzinvolledagbesteding1">Ja</label>
							<input type="radio" id="hieraanwerkenwerkenzinvolledagbesteding2" name="H2b" value="2"><label for="hieraanwerkenwerkenzinvolledagbesteding2">Nee</label>
						</div>
					<br>
				</div>
				<a href="mantel-step11.php?idm=<?php echo $idMantel; ?>&action=back" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">VORIGE</a> <input type="submit" name="volgende" value="VOLGENDE" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div> <!-- einde pagina11 -->
</form>
<?php include("footer.php"); ?>