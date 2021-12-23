<?php
    $score = "0"; 
    $naam = "Lucien";
    $leeftijd = "17";
    $melk = 1.19;
    $test = true;
    $test = null;
    $voornaam = "Tom";

    str_repeat('&nbsp;', 1); 

    echo "$score &nbsp";

    echo "$naam &nbsp";

    echo "$leeftijd &nbsp";

    echo "$melk &nbsp";

    echo "$test &nbsp";
    
    echo gettype($voornaam);

    $string = "ROCVA";
    $integer = 2;
    $float  =  9.9;
    $boolean = true;
    $null = null;

    echo gettype($string);
    echo gettype($integer);
    echo gettype($float);
    echo gettype($boolean);
    echo gettype($null);

    $Voornaam = "Lucien";
    $Leeftijd = 17;

    echo "Jouw naam is $Voornaam en je bent je $Leeftijd jaar oud.";

    $voornaam1 = "lucien";
    $voornaam2 = "gabriel";
    $voornaam3 = "gabe";


