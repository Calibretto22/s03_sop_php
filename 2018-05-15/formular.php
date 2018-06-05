<?php
	require("lib.inc.php");
	//Funktionsweiche
	if(isset($_GET['kdnr'])){
		//Modus Edit
		$kdnr = $_GET['kdnr'];
		// eingabeknr -> sql -> DB -> Datensatz ->
		// -> in die Formularfelder fuellen
		$sql = "select * from Kunde where kdnr=$kdnr;";
		$ergebnis = datenbankzugriff($sql);
		$datensatz = mysqli_fetch_assoc($ergebnis);
		$vorname = $datensatz['vorname'];
		$nachname = $datensatz['nachname'];
		$ort = $datensatz['ort'];
		$plz = $datensatz['plz'];
		$strasse = $datensatz['strasse'];
		$guthaben = $datensatz['guthaben'];
		$action="update.php?kdnr=$kdnr";
	}else{
		//Modus Neu
		$vorname = "";
		$nachname = "";
		$ort = "";
		$plz = "";
		$strasse = "";
		$guthaben = "";
		$action="anlegen.php";
		
	}
	
	
?>

<html>
	<head><title>HansenCRM</title></head>
	<body>
		<h1>HansenCRM</h1>
		<form action="<?php echo $action; ?>" method="post">
			Vorname: <input type="text" name="ff_vname"
			value="<?php echo $vorname; ?>"><br>
			Nachname: <input type="text" name="ff_nname"
			value="<?php echo $nachname; ?>"><br>
			Ort: <input type="text" name="ff_ort"
			value="<?php echo $ort; ?>"><br>
			PLZ: <input type="text" name="ff_plz"
			value="<?php echo $plz; ?>"><br>
			Strasse: <input type="text" name="ff_strasse"
			value="<?php echo $strasse; ?>"><br>
			Guthaben: <input type="text" name="ff_guthaben"
			value="<?php echo $guthaben; ?>"><br>
			<input type="submit" value="Speichern"><br>
		</form>
	</body>
</html>