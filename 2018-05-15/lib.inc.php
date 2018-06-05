<?php
function datenbankzugriff($sql){
	$con = mysqli_connect("localhost", "root", "", "test"); //host, user, pass, DB
	$ergebnis = mysqli_query($con, $sql);
	mysqli_close($con);
	return $ergebnis;
}

?>