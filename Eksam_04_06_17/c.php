<?php


function connect_db(){
	global $connection;
	$host="";
	$user="";
	$pass="";
	$db="";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}

function kuva_kom(){

$sql = "select id, nimi from kom";
$result = $connection->query($sql);
if ($result ->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        echo " Id: ".$row["id"]." Nimi: ".$row["nimi"]."<br>";
    }

} else {
    echo " 0 vastust";
}
}
