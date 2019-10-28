<?php
    $a = array();
    $b = array();
    $c = array();

   // $size = rand(0,10);
    for($i = 0 ; $i < 10 ; $i++){

        $a[] = rand(0,14);
        $b[] = rand(0,14);

    }

    for($i = 0 ; $i < 10 ; $i++){

        $c[] = $a[$i] + $b[$i];
    }

    for($i = 0 ; $i < 10 ; $i++){

         echo $c[$i];
         echo "<hr>";
    }

?>