<?php 

    // current | next | prev | end | reset 

    $persons = array('hamza','mahmoud','yasser','omar');
    echo current($persons) . "<br>";    
    echo next($persons) . "<br>";
    echo next($persons) . "<br>";
    echo prev($persons) . "<br>";
    echo reset($persons) . "<br>";
    echo next($persons) . "<br>";
    echo prev($persons) . "<br>";
    echo end($persons) . "<br>";

    