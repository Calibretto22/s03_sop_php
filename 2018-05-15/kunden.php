<?php
	require("lib.inc.php");
	
	//Eingabe
	$tabData = datenbankzugriff("show fields from Kunde;");
	$tabhead = '';
	while($row = mysqli_fetch_assoc($tabData)){
		$tabhead .= "<th>" . $row['Field'] . "</th>\n";
	}
	$tabhead .= "<th>Aktion</th>";
	
	$ergebnis = datenbankzugriff("select * from Kunde;");
	
		
	//Verarbeitung
	$tabHtml = "<table border=1>\n";
	
	$tabHtml .= "<tr>\n$tabhead</tr>\n";
	
	while($zeile = mysqli_fetch_assoc($ergebnis)){
		$tabHtml .= "<tr>\n";
		foreach($zeile as $spalteninhalt){
			$tabHtml .= "<td>$spalteninhalt</td>\n";
		}
		$tabHtml .= '<td><a 
				href="loeschen.php?kdnr=' . 
				$zeile['kdnr'] .
				'">Loeschen</a>&nbsp;
				<a href="formular.php?kdnr=' . 
				$zeile['kdnr'] .
				'">Edit</a></td>';
		$tabHtml .= "</tr>\n";
	}
		
	$tabHtml .= "</table>";
?>

<html>
	<head><title>HansenCRM</title></head>
	<body>
		<h1>HansenCRM</h1>
		<?php echo $tabHtml ?>
		<a href="formular.php">Neuen Kunden anlegen ...</a>
	</body>
</html>