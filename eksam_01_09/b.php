<?php

echo "Hello ".$_COOKIE["TestCookie"]." <br>";
echo $tekst = $_POST["tekst"];


echo "<br>";


setcookie("TestCookie", $tekst, time()+3600);




echo $_COOKIE["TestCookie"];