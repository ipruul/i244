<?php

$expiry = new DateTime('+1 day');
setcookie('language', 'EN-GB', $expiry->getTimestamp());
echo "<br>";
var_dump($_COOKIE);
echo "<br>";

if(isset( $_COOKIE ['language'])){
    echo "<br>";
    echo "Language set: {$_COOKIE['language']}";
}
