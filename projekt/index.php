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

        User:guest
        Password:guest


    </table>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>E-kaardid</title>
        <script language="JavaScript">
            var p1 = new Image();
            var p2 = new Image();
            var p3 = new Image();
            var p4 = new Image();
            var p5 = new Image();

            p1.src="thumb/_MG_0188_v.JPG";
            p2.src="thumb/_MG_0191_v.JPG"
            p3.src="thumb/_MG_0200_v.JPG"
            p4.src="thumb/_MG_1832_v.JPG"
            p5.src="thumb/_MG_1841_v.JPG"

            var imgArray = new Array(p1, p2, p3, p4, p5);
            var counter = 0;
            var end = imgArray.length - 1;

            function  scroll_backward() {
                if (counter == 0){
                    alert("start of pictures");
                }
                else {
                    counter--;
                }
                document.pic1.src = imgArray[counter].src;
            }
            function scroll_forward() {
                if (counter == end){
                    alert("No more")
                }
                else
                {
                    counter++;
                }
                document.pic1.src = imgArray[counter].src;

            }
        </script>
    </head>
    <body>


    <table width="500">
        <tr>
            <td height="200" width="100">
                <img src="forward.gif" onclick="scroll_forward()">
            </td>
            <td height="200" width="100" >
                <img src= thumb/_MG_0188_v.JPG name="pic1">
            </td>
            <td height="200" width="100" >
                <img src="back.gif" onclick="scroll_backward()">
            </td>
        </tr>
    </table>

    </body>
    </html>

