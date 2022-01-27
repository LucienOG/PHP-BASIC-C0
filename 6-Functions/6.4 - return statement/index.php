<?php
    function TienProcentKorting() {
        $koopPrijs = 75;
        $korting = 10;
        $kortingpercentage = ($korting / 100) * $koopPrijs;
        $totaalbedrag = $koopPrijs - $kortingpercentage;
        echo $totaalbedrag;

    }
    TienProcentKorting()

?>