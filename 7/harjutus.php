<?php echo "tere tali";


// see rida on kommentaar
/* kõik siin vahel, isegi kui see on mitu rida pikk,
on kommentaar */

$muutuja =  "test";
$muutuja2 = 123;
echo " \n";
echo "<br>";
echo $muutuja;
echo $muutuja2;

function loenda_lambaid($n){
    $l = "lammas";
    for($i=1; $i<$n; $i=$i+1) {
        echo "$i.$l\";
    }
}
loenda_lambaid(10);
?>