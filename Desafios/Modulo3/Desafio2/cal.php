<?php 

$num = (int)$_GET['numero'];

if($num > 0 and $num <= 10 ){
    for ($i=0; $i <= 10; $i++) {
       echo " $num x $i = " .$num*$i . "<br>";
    
    }
}


?>