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
$host="";
$user="";
$pass="";
$db="";
$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa �hendust mootoriga- ".mysqli_error());
mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($con));



$sql = "select pilt_id, pilt from pilt";
$result = $connection->query($sql);
if ($result ->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        echo " Pilt: ".$row["pilt_id"]." Pilt: ".$row["pilt"]."<br>";
    }

} else {
    echo " 0 vastust";
}


echo  "<br>";

$sql = "select * from pilt";
$result = $connection->query($sql);
if ($result ->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <img src="http://199.175.49.172/projekt/<?php echo $row['pilt'];?>" />
        <?php

    }

} else {
    echo " 0 vastust";
}
?>