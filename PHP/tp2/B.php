<?php
include "A.php";
echo  $var;
echo "<br>";
echo "max:" .max(7,3,4,8,10);
echo "<br>";
echo "max:" .max(array(40,50,70));
echo "<br>";
echo "min:" .min(array(40,50,70));
echo "<br>";
echo "arround:". round(5.4);
echo "<br>";
echo "arround:". round(5.8);
echo "<br>";
echo "floor: " .floor(5.9);
echo "<br>";
echo "ceil: ".ceil(5.4);
echo "<br>";
echo "rand: ".rand(5,8);


?>