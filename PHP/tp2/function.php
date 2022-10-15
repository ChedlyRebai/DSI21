<?php
function cube($n){
    return $n*$n*$n;
}
echo cube(5);

function cube2(&$a){
    $a=$a*$a*$a;
}
echo "<br>";

$a=2;
cube2($a);
echo $a;

$t=[5,"hello",3,5];
print_r($t);
?>