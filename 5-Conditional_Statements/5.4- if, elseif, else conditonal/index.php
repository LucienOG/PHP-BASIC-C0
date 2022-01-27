<?php
    $prod_besteld = 15;

    if($prod_besteld < 10) {
        echo $prijs = 1.50 . "<br>";
    } elseif($prod_besteld < 20) {
        echo $prijs = 1.25 . "<br>";
    } else {
        echo $prijs = 1.00 . "<br>";
    }

    if($prod_besteld < 20) {
        echo $prijs = 1.50 . "<br>";
    } elseif($prod_besteld < 25) {
        echo $prijs = 1.25 . "<br>";
    } else {
        echo $prijs = 1.00 . "<br>";
    }

    if($prod_besteld < 10) {
        echo $prijs = 1.50 . "<br>";
    } elseif($prod_besteld < 14) {
        echo $prijs = 1.25 . "<br>";
    } else {
       echo $prijs = 1.00 . "<br>";
    }
    
?>