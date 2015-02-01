<?php 
global $user;
if ($user->uid){
	// CHECK TEST DATA
	if (!empty($_GET["checkid"]) && !empty($_GET["checktest"])){$results = db_query("UPDATE bb_aanvraagtabel SET test = '".$_GET["checktest"]."' WHERE idRecord = '".$_GET["checkid"]."'");}
	
	// START
	$userid = $user->uid;
	$username = $user->name;
	$usermail = $user->mail;
	echo "Welkom ".$username.". Met het ID ".$userid." en het email adres ".$usermail.".</br>";
	echo "Hier is het overzicht van al uw aanvragen.</br>";
	$results = db_query("select * from bb_aanvraagtabel where idHulpverlener = $userid");
	echo "<table style='width:100%'><tr>
	<td>TIJDSTIP</td>
	<td>INFO</td>
	<td>RAPPORT</td>
	<td>C_INGEVULD</td>
	<td>M_INGEVULD</td>
	<td>CATEGORIE</td>
	<td>RELATIE</td>
	<td>REL_ANDERE</td>
	<td>C_LEEFTIJD</td>
	<td>M_LEEFTIJD</td>
	<td>TEST</td>
	</tr>";
	foreach($results as $result) {
		echo "<tr>";
		$tijd = $result->timestamp;
		$idRecord = $result->idRecord;
		$idMantel = $result->idMantel;
		$idPatient = $result->idPatient;
		$idRapport = $result->idRapport;
		$nahcategorie = $result->nahcategorie;
		$relatie = $result->relatie;
		$relatieandere = $result->relatieandere;
		$leeftijdclient = $result->leeftijdclient;
		$leeftijdmantelzorger = $result->leeftijdmantelzorger;
		$openfield = $result->openfield;
	
		if ($result->test == '1'){$test = "<a href='overzicht?checkid=$idRecord&checktest=3'>TEST</a> OF <a href='overzicht?checkid=$idRecord&checktest=2'>GELDIG</a>";}
		if ($result->test == '2'){$test = "GELDIG (<a href='overzicht?checkid=$idRecord&checktest=1'>AANPASSEN</a>)";}
		if ($result->test == '3'){$test = "TEST DATA (<a href='overzicht?checkid=$idRecord&checktest=1'>AANPASSEN</a>)";}
		
		if ($result->idM_compleet == '0'){$idM_compleet = "<p style='color:red;'>Neen</p>";}else{$idM_compleet = "<p style='color:green;'>Ja</p>";}
		if ($result->idP_compleet == '0'){$idP_compleet = "<p style='color:red;'>Neen</p>";}else{$idP_compleet = "<p style='color:green;'>Ja</p>";}
		echo "<td>".$tijd."</td>";
		echo "<td>".$openfield."</td>";
		if ($result->idM_compleet == '1' && $result->idP_compleet == '1'){echo "<td><a href='http://ernah.be/finah/survey/rapport.php?idr=$idRapport&idc=$idPatient&idm=$idMantel'>RAPPORT BESCHIKBAAR</a></td>";}else{echo "<td>N/A</td>";}
		echo "<td>".$idP_compleet."</td>";
		echo "<td>".$idM_compleet."</td>";
		echo "<td>".$nahcategorie."</td>";
		echo "<td>".$relatie."</td>";
		echo "<td>".$relatieandere."</td>";
		echo "<td>".$leeftijdclient."</td>";
		echo "<td>".$leeftijdmantelzorger."</td>";
		echo "<td>".$test."</td>";
		echo "</tr>";
	}
	echo "</table>";
} else { echo "Welkom hulpverlener. Gelieve hier aan de rechterkant inloggen om uw gegevens te raadplegen.";}
?>