<html>
<body>

<a href="logout.php" >logout</a>
</body>
</html>

<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 22.05.2017
 * Time: 0:32
 */
session_start();

if(!isset($_SESSION['username'])) {
    die('You need to be logged in!!!');
} else {
    echo 'Welcome ' . $_SESSION['username'];
}


var_dump($_SESSION);
echo '<br>';
echo '<br>';

require_once('l.php');
