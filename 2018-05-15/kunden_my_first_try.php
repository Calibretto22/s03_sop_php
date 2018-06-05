<?php

echo "hi </br>";





$accDB =  mysqli_connect("localhost", "root", "", "test"); //host, user, pass, DB

/*function createNewDB(){
	
//if table not exist -> create table
}*/

$sql_ShowKunden = "SELECT * FROM Kunde;";
$sql_DropCreate = "DROP TABLE test; CREATE TABLE Kunde(
		 kdnr int(6) auto_increment,
		 vorname varchar(30),
		 nachname varchar(30) ,
		 strasse varchar(30) ,
		 plz varchar(6) ,
		 ort varchar(20) ,
		 guthaben double(10,2) ,
		 PRIMARY KEY (kdnr))";
$sql_ShowFields = "show fields from kunde";

$obj_tabellenkopf = mysqli_query($accDB,$sql_ShowFields);
	$txt_tabkopftext = "";
	while($zeile1 = mysqli_fetch_assoc($obj_tabellenkopf))
		{$txt_tabkopftext .= $zeile['Field'] . "  |\n" ;}
echo "\n </br>";
echo $txt_tabkopftext; //debug

$obj_tabellinhalt = mysqli_query($accdb,$sql_ShowFields);

while($zeile2 = mysqli_fetch_assoc($obj_tabellinhalt)){
	foreach($zeile1 as $spalteninhalt){
		//hier weiter machen
	}
}

 


/*
function kundenanzeigen(){}

function kundenloeschen(){}

function kundenaendern(){}

*/

mysqli_close($accDB);
?>