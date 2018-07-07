<?php 

    // Multidimension Array
    $persons = array(array("hamza",22),array("tarek",20),array("mohamed",30) );
    echo $persons[1][1];

    for($r = 0 ; $r < 3 ; $r++) {
        echo "<ul>";
        for($c = 0 ; $c < 2 ; $c++) {
            echo "<li>" . $persons[$r][$c] . "</li>";
        }
        
        echo "</ul>";
    }
    