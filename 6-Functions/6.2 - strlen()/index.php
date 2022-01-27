<?php
    function mijnNaamIsGroot() {
        $voornaam = 'Lucien';
        $achternaam = 'Osei';
        $geheleNaam = "Mijn naam is $voornaam $achternaam";
        $geheleNaam = strtoupper($geheleNaam);
        echo $geheleNaam;
    }

    mijnNaamIsGroot()

?>