<?php 
    echo sprintf("<h3>Permutation</h3>");
    $a = 10;
    $b = 20;
    echo sprintf("<div>Avant permutation : a = %s, b = %s</div>", $a, $b);
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo sprintf("<div>Après permutation : a = %s, b = %s</div>", $a, $b);
    
