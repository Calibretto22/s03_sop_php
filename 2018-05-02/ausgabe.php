<?php
#kommentar: what a ride
$anrede['pvname'] = $_POST['vname'];
$anrede['pnname'] = $_POST['nname'];

#echo "hallo welt - die zweite - mit Ümläut-Töst </br>";
echo "hallo ".$anrede['pvname']." ".$anrede['pnname'];


?>

<!--
<html>
<head><title>Begruessung</title></head>
<body>
<form action="ausgabe.php" method=post>

	<input name="vname" type=text size=40 maxlength=80 value="Bobby">
	</br>
	<input name="nname" type=text size=40 maxlength=80 value="Tables">
	</br>
	<input name="btnsend" type="submit" value="Abschicken">
	<input name="btnreset" type="reset" value="Zuruecksetzen">
</form>
</body>
</html>
-->