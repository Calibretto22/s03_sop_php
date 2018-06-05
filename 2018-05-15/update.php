<?php
	require("lib.inc.php");
	//Eingabe
	$kdnr = $_GET['kdnr'];
	$vorname = $_POST['ff_vname'];
	$nachname = $_POST['ff_nname'];
	$ort = $_POST['ff_ort'];
	$plz = $_POST['ff_plz'];
	$strasse = $_POST['ff_strasse'];
	$guthaben = $_POST['ff_guthaben'];
	
	/*Verarbeitung (Eingabedaten -> SQL -> DB
		 -> 0/1 -> message -> html */
	$sql = "update Kunde
		set vorname='$vorname', 
		nachname='$nachname', 
		ort='$ort',
		plz='$plz', 
		strasse='$strasse', 
		guthaben=$guthaben
		where kdnr=$kdnr;";
		
		$ergebnis = datenbankzugriff($sql);
		
		if($ergebnis == 1){
			$message = "Datensatz in der DB!!";
		}else{
			$message = "ERROR!! </br>" . $sql . "</br>";
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