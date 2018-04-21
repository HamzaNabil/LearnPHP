<?php
    
// echo

$x = 1;
echo "<p>Test" . $x . "</p>";

// print 
$y = 2;
print "$y";

// diff echo & print 
echo "test","yes","2","test"; // yes
print "test","yes","2","test"; // no

$x = echo "" ;
echo $x; // no

$x = print "" ;
print $x; // yes
