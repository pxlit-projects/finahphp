<?php
$sqla = "select waarde from $tabel where idMantel = '$idMantel' AND variable = '$variableA'";
$sqlb = "select waarde from $tabel where idMantel = '$idMantel' AND variable = '$variableB'";
$resulta = $db->select($sqla);
$resultb = $db->select($sqlb);
$numrowsa = $resulta->num_rows();
$numrowsb = $resultb->num_rows();
$showpropa = '';	$showattra = '';	$showaddclassa = '';
$showpropb = '';	$showattrb = '';	$showaddclassb = '';
$onchangevariable = $labelA."1";

if($numrowsb == 1){
	$showradio = '$("#radio2").show();';
	while ($rowa = $resulta->fetch_assoc()) {
	$waardeA = $rowa["waarde"];
	}
	while ($rowb = $resultb->fetch_assoc()) {
	$waardeB = $rowb["waarde"];
	}
	$propwaardeA = $labelA.$waardeA;
	$propwaardeB = $labelB.$waardeB;
	$showpropa = '$("#'.$propwaardeA.'").prop("checked", true);';
	$showattra = '$("label[for=\''.$propwaardeA.'\']").attr("aria-pressed", "true");';
	$showaddclassa = '$("label[for=\''.$propwaardeA.'\']").addClass("ui-state-active");';
	$showpropb = '$("#'.$propwaardeB.'").prop("checked", true);';
	$showattrb = '$("label[for=\''.$propwaardeB.'\']").attr("aria-pressed", "true");';
	$showaddclassb = '$("label[for=\''.$propwaardeB.'\']").addClass("ui-state-active");';
}

if($numrowsa == 1 && $numrowsb == 0){
	$showradio = '$("#radio2").hide();';
	while ($rowa = $resulta->fetch_assoc()) {
	$waardeA = $rowa["waarde"];
	}
	$propwaardeA = $labelA.$waardeA;
	$showpropa = '$("#'.$propwaardeA.'").prop("checked", true);';
	$showattra = '$("label[for=\''.$propwaardeA.'\']").attr("aria-pressed", "true");';
	$showaddclassa = '$("label[for=\''.$propwaardeA.'\']").addClass("ui-state-active");';	
}

if($numrowsa == 0){$showradio = '$("#radio2").hide();';}
$resulta->close(); $resultb->close();
?>
<script>
jQuery(document).ready(function() {
    jQuery("#form").validate({
        rules: {<?php echo $variableA; ?>:{required: true},<?php echo $variableB; ?>:{required: true}},
		messages: {<?php echo $variableA; ?>:"<p style='color:red'>U dient deze vraag in te vullen.</p></br>",<?php echo $variableB; ?>:"<p style='color:red'>U dient deze vraag in te vullen.</p></br>"}});
    <?php
	echo $showradio;
	echo $showpropa;
	echo $showattra;
	echo $showaddclassa;
	echo $showpropb;
	echo $showattrb;
	echo $showaddclassb;
	?>
    $("#radio1").change(function() {
        if ($("#<?php echo $onchangevariable; ?>").is(":checked")) {
            $("#radio2").hide();
        } else {
            $("#radio2").show();
        }
    });    
});
</script>
<?php
if (!empty($_POST["$submitVariableA"])){$submitwaardeA = $_POST["$submitVariableA"];
$sql = "select variable from $tabel where idMantel = '$idMantel' AND variable = '$submitVariableA'";$result = $db->select($sql);$numrows = $result->num_rows();if ($numrows == '1'){$results = $db->execute_query("UPDATE $tabel SET waarde = '".$submitwaardeA."' WHERE idMantel = '".$idMantel."' AND variable = '".$submitVariableA."'");}if ($numrows == '0'){$results = $db->insert("INSERT INTO $tabel (idMantel, variable, waarde) VALUES ($idMantel, '".$submitVariableA."', '".$submitwaardeA."')");}if ($submitwaardeA == '1'){$results = $db->execute_query("DELETE FROM $tabel WHERE idMantel = '".$idMantel."' AND variable = '".$submitVariableB."'");}else{if (!empty($_POST["$submitVariableB"])){$submitwaardeB = $_POST["$submitVariableB"];$sql = "select variable from $tabel where idMantel = '$idMantel' AND variable = '".$submitVariableB."'";$result = $db->select($sql);$numrows = $result->num_rows();if ($numrows == '1'){$results = $db->execute_query("UPDATE $tabel SET waarde = '".$submitwaardeB."' WHERE idMantel = '".$idMantel."' AND variable = '".$submitVariableB."'");}if ($numrows == '0'){$results = $db->insert("INSERT INTO $tabel (idMantel, variable, waarde) VALUES ($idMantel, '".$submitVariableB."', '".$submitwaardeB."')");}}}}
?>