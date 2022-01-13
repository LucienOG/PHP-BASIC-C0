<?php
    $myDogNames = array("Fenrir", "Warwick", "Sett");

    echo "<ul> <li>$myDogNames[0]</li> <li>$myDogNames[1]</li> <li>$myDogNames[2]</li> </ul>";

    $myDogNames[0] = 'Nasus';

    echo "<ul> <li>$myDogNames[0]</li> <li>$myDogNames[1]</li> <li>$myDogNames[2]</li> </ul>";
?>