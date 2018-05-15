<?php
	//Eingabe
	$con = mysqli_connect("127.0.0.1", "fom", "geheim", "hansenCRM");
	$tabData = mysqli_query($con, "show fields from Kunde;");
	$tabhead = '';
	while($row = mysqli_fetch_assoc($tabData)){
		$tabhead .= "<th>" . $row['Field'] . "</th>\n";
	}
	
	$sql = "select * from Kunde;";
	$ergebnis = mysqli_query($con, $sql);
	mysqli_close($con);
		
	//Verarbeitung
	$tabHtml = "<table border=1>\n";
	$tabHtml .= "<tr>\n$tabhead</tr>\n";
	while($zeile = mysqli_fetch_assoc($ergebnis)){
		$tabHtml .= "<tr>\n";
		foreach($zeile as $spalteninhalt){
			$tabHtml .= "<td>$spalteninhalt</td>\n";
		}
		$tabHtml .= "</tr>\n";
	}
	
	
	$tabHtml .= "";
	
	$tabHtml .= "</table>";
?>

<html>
	<head><title>HansenCRM</title></head>
	<body>
		<h1>HansenCRM</h1>
		<?php echo $tabHtml ?>
	</body>
</html>