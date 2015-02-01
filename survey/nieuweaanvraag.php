<?php

function send_simple_message($to, $subject, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, 'api:key-xxx');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v2/sandboxxxx.mailgun.org/messages');
    curl_setopt($ch, CURLOPT_POSTFIELDS,
                array('from' => 'sender@pxl.be',
                      'to' => $to,
                      'subject' => $subject,
                      'html' => $msg));
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

global $user;
$sitebase = 'http://bitnami-lampstack-2b4f.cloudapp.net';

if ($user->uid){
	$userid = $user->uid;
	$usermail = $user->mail;

	if (!empty($_POST["leeftijdclient"]) && !empty($_POST["leeftijdmantelzorger"])){

		// calculating
		$idMantel = mt_rand(10000,10000000);
		$idPatient = mt_rand(10000,10000000);
		$idRapport = mt_rand(10000,10000000);
		$idHulpverlener = $userid;
		$idM_compleet = "0";
		$idP_compleet = "0";

		// double checking
		$resultmantel = db_query("select idMantel from bb_aanvraagtabel where idMantel = $idMantel");
		$resultpatient = db_query("select idPatient from bb_aanvraagtabel where idPatient = $idPatient");
		$resultrapport = db_query("select idRapport from bb_aanvraagtabel where idRapport = $idRapport");
		$nrrowsmantel = $resultmantel->rowCount();
		$nrrowspatient = $resultpatient->rowCount();
		$nrrowsrapport = $resultrapport->rowCount();
		if ($nrrowsmantel == '1'){ $idMantel = mt_rand(10000000,90000000);}
		if ($nrrowspatient == '1'){ $idPatient = mt_rand(10000000,90000000);}
		if ($nrrowsrapport == '1'){ $idRapport = mt_rand(10000000,90000000);}

		// GEGEVENS POST ANDERE PAGINA
		if (!empty($_POST["nahcategorie"])){$nahcategorie = $_POST["nahcategorie"];}else{$nahcategorie = "0";}
		if (!empty($_POST["relatie"])){$relatie = $_POST["relatie"];}else{$relatie = "0";}
		if (!empty($_POST["relatieandere"])){$relatieandere = $_POST["relatieandere"];}else{$relatieandere = "";}
		if (!empty($_POST["leeftijdclient"])){$leeftijdclient = $_POST["leeftijdclient"];}else{$leeftijdclient = "0";}
		if (!empty($_POST["leeftijdmantelzorger"])){$leeftijdmantelzorger = $_POST["leeftijdmantelzorger"];}else{$leeftijdmantelzorger = "0";}
		if (!empty($_POST["openfield"])){$openfield = $_POST["openfield"];}else{$openfield = "";}

		// insert into DB
		$results = db_query("INSERT INTO bb_aanvraagtabel (idMantel, idPatient, idHulpverlener, idRapport, idM_compleet, idP_compleet, nahcategorie, relatie, relatieandere, leeftijdclient, leeftijdmantelzorger, openfield) VALUES ($idMantel, $idPatient, $idHulpverlener, $idRapport, $idM_compleet, $idP_compleet, '$nahcategorie', '$relatie', '$relatieandere', '$leeftijdclient', '$leeftijdmantelzorger', '$openfield')");

		// send mail (old version)
		//$to = $usermail;
		//$subject = "Enquête ERNAH-screeningsinstrument NAH";
		//$txt = "
		//<html>
		//<head>
		//<title>Enquête ERNAH-screeningsinstrument NAH</title>
		//</head>
		//<body>
		//Beste,</br>
		//Hartelijk dank voor jouw nieuwe aanvraag.</br></br>
		//<a href='http://ernah.be/finah/survey/mantel-step1.php?idm=$idMantel'>De vragenlijst voor de Mantelzorger kan u hier vinden.</a></br>
		//<a href='http://ernah.be/finah/survey/client-step1.php?idc=$idPatient'>De vragenlijst voor de Client kan u hier vinden.</a></br>
		//<a href='http://ernah.be/finah/survey/rapport.php?idr=$idRapport&idc=$idPatient&idm=$idMantel'>Achteraf kan u deze link gebruiken om het rapport op te vragen.</a></br></br>
		//</body>
		//</html>
		//";
		//// Always set content-type when sending HTML email
		//$headers = "MIME-Version: 1.0" . "\r\n";
		//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		//// More headers
		//$headers .= "From: $usermail" . "\r\n";
		//mail($to,$subject,$txt,$headers);

        $to = $usermail;
		$subject = "Enquête ERNAH-screeningsinstrument NAH";
		$txt = "Beste,</br>
		Hartelijk dank voor jouw nieuwe aanvraag.</br></br>
		<a href='$sitebase/survey/mantel-step1.php?idm=$idMantel'>De vragenlijst voor de Mantelzorger kan u hier vinden.</a></br>
		<a href='$sitebase/survey/client-step1.php?idc=$idPatient'>De vragenlijst voor de Client kan u hier vinden.</a></br>
		<a href='$sitebase/survey/rapport.php?idr=$idRapport&idc=$idPatient&idm=$idMantel'>Achteraf kan u deze link gebruiken om het rapport op te vragen.</a></br></br>
		";
		//// Always set content-type when sending HTML email
		//$headers = "MIME-Version: 1.0" . "\r\n";
		//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		//// More headers
		//$headers .= "From: $usermail" . "\r\n";
		$ok = send_simple_message($to, $subject, $txt);

		echo $ok;
		echo "Uw nieuwe aanvraag is doorgevoerd. U kan <a href='overzicht'>hier het overzicht raadplegen.</a></br>In uw mailbox kan u nu de unieke link voor de enquete terugvinden die bedoeld zijn voor de client en de mantelzorger.";
	}
	else
	{
		echo "Welkom hulpverlener (patat). Met het ID ".$userid.". Start hier jouw nieuwe aanvraag door de volgende gegevens in te vullen.</br></br>";
		echo '<form action="aanvraag" method="post">
			<b>Algemene gegevens</b></br>
			<textarea name="openfield" rows="5" cols="60" maxlength="100"></textarea></br>
			NAH-categorie: <select name="nahcategorie">
			<option value="Traumatisch hersenletsel">Traumatisch hersenletsel</option>
			<option value="Hersenletsel met inwendige oorzaak">Hersenletsel met inwendige oorzaak</option>
			<option value="Progressief Hersenletsel">Progressief Hersenletsel</option>
			</select>
			</br>
			Relatie cliënt mantelzorger: <select name="relatie">
			<option value="Partners">Partners</option>
			<option value="Ouder (met NAH) & kind">Ouder (met NAH) & kind</option>
			<option value="Kind (met NAH) & ouder">Kind (met NAH) & ouder</option>
			<option value="Andere familieband">Andere familieband</option>
			<option value="Andere">Andere</option>
			</select>
			</br>
			Indien andere: <input type="text" name="relatieandere">
			</br></br>
			<b>Gegevens CLIËNT</b></br>
			Leeftijdscategorie: <select name="leeftijdclient">
			<option value="20j"><20 jaar</option>
			<option value="20-30j">20-30 jaar</option>
			<option value="30-40j">30-40 jaar</option>
			<option value="40-50j">40-50 jaar</option>
			<option value="50-60j">50-60 jaar</option>
			<option value="60-70j">60-70 jaar</option>
			<option value="70-80j">70-80 jaar</option>
			<option value="80j">>80 jaar</option>
			</select>
			</br></br>
			<b>Gegevens MANTELZORGER</b></br>
			Leeftijdscategorie:<select name="leeftijdmantelzorger">
			<option value="20j"><20 jaar</option>
			<option value="20-30j">20-30 jaar</option>
			<option value="30-40j">30-40 jaar</option>
			<option value="40-50j">40-50 jaar</option>
			<option value="50-60j">50-60 jaar</option>
			<option value="60-70j">60-70 jaar</option>
			<option value="70-80j">70-80 jaar</option>
			<option value="80j">>80 jaar</option>
			</select>
			</br>
			<input type="submit" value="START">
			</form>';
	}
} else { echo "Welkom hulpverlener. Gelieve hier aan de rechterkant inloggen om uw gegevens te raadplegen.";}
?>
