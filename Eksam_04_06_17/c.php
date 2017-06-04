<?php



	global $connection;
	$host="localhost";
	$user="ipruul";
	$pass="itc_pass2";
	$db="ipruul";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));



$sql = "select id, nimi, kommentaar from kom";
$result = $connection->query($sql);
if ($result ->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        echo " Id: ".$row["id"]." Nimi: ".$row["nimi"]." Kommentaar: ".$row["kommentaar"]. "<br>";
    }

} else {
    echo " 0 vastust";
}


