<?php
/**
 * Created by IntelliJ IDEA.
 * User: ipruul
 * Date: 5/24/2017
 * Time: 5:09 PM
 */
session_start();
session_destroy();
header('Location: index.php');
exit;