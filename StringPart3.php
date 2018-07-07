<?php 

    

    // nl2br
    echo nl2br("Text1 \n Text2");

    // trim ltrim rtrim
    $str =  'Hello World He';
    echo "<br> ". $str . "<br>";
    echo rtrim($str,"He");
    
    // join 
    $arr = array('test1','test2','test3');
    echo join(" " , $arr);
    