<?php

    // sort  | rsort 
    // asort | arsort ( value);
    // ksort | krsort ( key)
    // 1 indexed
//    $nums = array(10,20,6,40); // dynamic
//    rsort($nums);
//    $count = count($nums);
//    for($i = 0 ; $i < $count ; $i++) {
//        echo $nums[$i] . "<br>";
//    }

    // 2 Associative
    $nums = array("1"=>"50" , "5"=>"20", "3"=>"15");
    krsort($nums);

    foreach($nums as $x => $value ) {
        echo $x . "  " . $value . "<br>";
    }