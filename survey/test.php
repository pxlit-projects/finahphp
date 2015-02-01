<?php 
include("headerclient.php");
$labelA = "ervaarietsnieuwsleren";
$labelB = "hieraanwerkenietsnieuwsleren";
$variableA = "A3a";
$variableB = "A3b";
include("headerscripts.php");
?>
</head>
<body>
<div id="pagina2">
<p align="center"><progress value="1" max="53"></progress></p>
<form id="form" method="post" action="client-step2-1.php?idc=<?php echo $idPatient; ?>">
<!-- dit formulier is de client versie -->
	<h2>Leren en toepassen van kennis</h2>
			<h3>Iets nieuws leren (zoals het leren omgaan met bijv. een nieuwe GSM, vaatwasmachine of afstandsbediening; leren ikv een hobby)</h3>
				<div>
					<center><img src="images/A%20-%20leren%20en%20toepassen%20van%20kennis/d155%20-%20aanleren%20van%20vaardigeden.jpg"></center>
					<br>
					<h4>Hoe ervaar ik dit onderdeel?</h4>
					<div id="radio1">
						<input type="radio" id="ervaarietsnieuwsleren1" name="A3a" value="1"><label for="ervaarietsnieuwsleren1">Verloopt naar wens</label>
						<input type="radio" id="ervaarietsnieuwsleren2" name="A3a" value="2"><label for="ervaarietsnieuwsleren2">Probleem - niet hinderlijk</label>
						<input type="radio" id="ervaarietsnieuwsleren3" name="A3a" value="3"><label for="ervaarietsnieuwsleren3">Probleem - hinderlijk voor mij</label>
						<input type="radio" id="ervaarietsnieuwsleren4" name="A3a" value="4"><label for="ervaarietsnieuwsleren4">Probleem - hinderlijk voor mantelzorger</label>
						<input type="radio" id="ervaarietsnieuwsleren5" name="A3a" value="5"><label for="ervaarietsnieuwsleren5">Probleem - hinderlijk voor beide</label>
					</div>
					<br>
					<div id="radio2">
					<h4>Wilt u dat we hieraan werken?</h4>
							<input type="radio" id="hieraanwerkenietsnieuwsleren1" name="A3b" value="1"><label for="hieraanwerkenietsnieuwsleren1">Ja</label>
							<input type="radio" id="hieraanwerkenietsnieuwsleren2" name="A3b" value="2"><label for="hieraanwerkenietsnieuwsleren2">Nee</label>
					</div>
					<br>
				</div>
<input type="submit" id="submit" name="volgende" value="Volgende" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
</div>
</form>
<?php include("footer.php"); ?>