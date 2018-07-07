<?php

    // Array [ Indexed  + Associative + Multi]

    // 1 indexed
    $names = array('ahmed','tarek','hamza','abdo'); // dynamic
    
    //$names[0] = 'ahmed'; // manually
    //$names[1] = 'tarek';
    $count = count($names);
    for($i = 0 ; $i < $count ; $i++) {
        echo $names[$i] . "<br>";
    }

    // 2 Associative
    $names = array("key1"=>"ahmed" , "key2"=>"tarek","key3"=>"hamza");
    $names["key1"] = "ahmed";

    foreach($names as $x => $value ) {
        echo $x . "  " . $value . "<br>";
    }
    
    
    