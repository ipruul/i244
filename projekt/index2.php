<?php
session_start();

if(isset($_POST['btnLogin'])){

    require 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query
    ($con,'select * from login where 
username="'.$username.'" and password="'.$password.'"');
if(mysqli_num_rows($result)==1){

     $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;


    header('Location: welcome.php');

}
else
    echo "Account is invalid";

}
?>


<form method="post" >
    <table cellpadding="2" cellspacing="2" border="1">

         <tr>
             <td>Username</td>
             <td><input type="text" name="username"></td>
         </tr>
        <tr>
            <td>Üassword</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>st</td>
            <td><input type="submit" name="btnLogin" value="Login"></td>
        </tr>




    </table>

