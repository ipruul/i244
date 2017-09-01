<?php

echo "Hello ".$_COOKIE["TestCookie"]." <br>";
echo $tekst = $_POST["tekst"];


echo "<br>";

if (isset($_COOKIE["TestCookie"]))
echo "Hello ". $_COOKIE["TestCookie"] . "<br>";
else
{

setcookie("TestCookie", $tekst, time()+3600);
}


echo $_COOKIE["TestCookie"];