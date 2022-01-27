<?php
    $var1 = 9;
    $var2 = 15;

    if($var1 < 10 && $var2 > 5) {
        echo "beide waarden zijn true" . "<br>";
    } else {
        echo "niet beide waarden zijn true" . "<br>";
    }

    if($var1 < 10 || $var2 > 5) {
        echo "minimaal 1 waarde is true" . "<br>";
    } else {
        echo "geen van beide waarden zijn true" . "<br>";
    }

    if($var1 < 10 xor $var2 > 5) {
        echo "1 van de twee waardes is true maar de ander niet" . "<br>";
    } else {
        echo "beide waarden zijn true of beide waarden zijn false" . "<br>";
    }

    if($var1 < 10 !== $var2 > 5) {
        echo "true als de vergelijking niet true is" . "<br>";
    } else {
        echo "de vergelijking is true" . "<br>";
    }

?>