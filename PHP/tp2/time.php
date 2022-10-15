<?php

    $seconds=$_POST['time'];
    $hours = floor($seconds / 3600);
    $mins = floor($seconds / 60 % 60);
    $secs = floor($seconds % 60);
   
     echo ($hours<10) ?  "0".$hours : $hours ;
     echo ":";
     echo ($mins<10) ?  "0".$mins : $mins ;
     echo ":";
     echo ($secs<10) ?  "0".$secs : $secs ;

?>