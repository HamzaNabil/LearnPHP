<?php

    /*
        - what is Function ?
        - PHP Function Arguments
        - PHP Default Argument Value
        - Returning values
        - Example
    */

function _test($name,$age = 20) {
    return 'Name is ' . $name . ' and the age is ' . $age ;
}

echo _test('hamza');
