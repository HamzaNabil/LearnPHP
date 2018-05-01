<?php
    
    /* 
    ** String 
    ** Intger 
    ** Float 
    ** Boolean 
    ** Array 
    ** Object 
    ** Null 
    ** Resource
    */
    
    // Array
    $arr = array("ahmed","yasser","tarek");
    echo var_dump($arr);

    echo "<br>";

    // Object
    class Car {
        var $price = 50000;
    }

    $cloneCar = new Car();
    echo $cloneCar->price;
    echo "<br>";
    echo var_dump($cloneCar);
    
    echo "<br>";
    // Null
    $n = null;
    echo var_dump($n);
     

?>