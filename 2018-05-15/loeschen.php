<?php
	require("lib.inc.php");
	
	//Eingabe
	$kdnr = $_GET['kdnr'];
	
	/*Verarbeitung (kdnr -> SQL -> DB
		 -> 0/1 -> message -> html */
	$sql = "delete from kunde where kdnr=$kdnr;";
		
		$ergebnis = datenbankzugriff($sql);
		
		if($ergebnis == 1){
			$message = "Datensatz entfernt!!";
		}else{
			$message = "ERROR!!";
		}
?>

<html>
	<head><title>HansenCRM</title></head>
	<body>
		<h1>HansenCRM</h1>
		<?php echo $message; ?>
		<a href="kunden.php">Zur&uuml;ck zur Liste ...</a>
	</body>
</html>