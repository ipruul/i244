<?php
/**
 * Created by IntelliJ IDEA.
 * User: ipruul
 * Date: 5/24/2017
 * Time: 5:42 PM
 */

if(!isset($_SESSION['username'])) {
    die('You need to be logged in!!!');
} else

global $connection;
$host="localhost";
$user="ipruul";
$pass="itc_pass2";
$db="ipruul";
$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($con));

$sql = "select nimi, puur from loomaaed";
$result = $connection->query($sql);
if ($result ->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        echo " Nimi: ".$row["nimi"]." Puur: ".$row["puur"]."<br>";
    }

} else {
    echo " 0 vastust";
}
echo  "<br>";

$sql = "select * from loomaaed";
$result = $connection->query($sql);
if ($result ->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        echo "id:".$row["id"]. " Nimi: ".$row["nimi"]." Vanus: ".$row["vanus"]." Pilt: ".$row["liik"]." Puur: ".$row["puur"]."<br>";
    }

} else {
    echo " 0 vastust";
}
