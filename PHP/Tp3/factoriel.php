<?php
function factoriel($n){
    $f=1;
    for( $i = 1 ; $i <= $n ; $i++){
        $f*=$i;
    }
    return $f;
}

echo "factorielde 5 est:" .factoriel(5);
echo "<br>";


$t=[5,5,5,5,10];
function somme($t){
    $s=0;
    for($i=0;$i<count($t);$i++){
        $s+=$t[$i];
    }
    return $s;
}
echo "somme:". somme($t);




function cardinale($n,$p){
    return factoriel($n)/(factoriel($p)*factoriel($n-$p));
}
echo "<br>";
echo "cardinale ".cardinale(5,3);





function minmax($t){
    $val=[];
    $min=$t[0];
    $max=$t[0];
    for ($i=0; $i <count($t) ; $i++) { 
        if($min>$t[$i]){
            $min=$t[$i];
        }
        if($max<$t[$i]){
            $max=$t[$i];
        }       
    }
    $val[0]=$min;
    $val[1]=$max;
    return $val;
}
$t=[4,1,9,5,5];
$newtable=[];
$newtable=minmax($t);
echo "<br>";
echo "min:".$newtable[0];
echo "<br>";
echo "max:".$newtable[1];
echo "<br>";


function concurrences($t){
     $val=[];
     for ($i=0; $i < count($t); $i++) { 
        $nb=0;
            for($k=0; $k < count($t); $k++) { 
                
                if($t[$i]==$t[$k]){
                    $nb++;
                }
                $val[$i]=$nb;             
            }   
        }
    return $val;
 }

 $t2=[0,0,1,1,4,4,4,4];
 $arr=[];
 $arr=concurrences($t2);
 echo $arr[0] ."<br>";
 echo $arr[1] ."<br>";
 echo $arr[2] ."<br>";


?>