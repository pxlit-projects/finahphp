<?php include("headerrapport.php"); ?></head><body>DOWNLOAD HIER HET RAPPORT</br></br>
<style>.inlineTable {display: inline-block;}</style>
<?php 
if($allesok = "OK")
{
	$sqla = "select variable, waarde from $tabelclient where idPatient = '$idPatient'";
	$sqlb = "select variable, waarde from $tabelmantel where idMantel = '$idMantel'";
	$resulta = $db->select($sqla);
	$resultb = $db->select($sqlb);
	$numrowsa = $resulta->num_rows();
	$numrowsb = $resultb->num_rows();

	if($numrowsa > 0){
		echo "<table border=1 class='inlineTable'><tr><td>OUTPUT CLIENT DATA</td><td></td></tr>";
		while ($rowa = $resulta->fetch_assoc()) {
			$variableA = $rowa["variable"];
			$waardeA = $rowa["waarde"];
			echo "<tr><td>".$variableA."</td><td>".$waardeA."</td></tr>";
		}
		echo "</table>";
	}
	if($numrowsb > 0){
		echo "<table border=1 class='inlineTable'><tr><td>OUTPUT MANTELZORGER DATA</td><td></td></tr>";
		while ($rowb = $resultb->fetch_assoc()) {
			$variableB = $rowb["variable"];
			$waardeB = $rowb["waarde"];
			echo "<tr><td>".$variableB."</td><td>".$waardeB."</td></tr>";
		}
		echo "</table>";
	}
}

include("footer.php"); ?>