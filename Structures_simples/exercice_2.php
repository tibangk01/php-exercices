<?php 
    $n = 5;
    $p = 7;
    $q = 3;
    
    echo sprintf("N = %s, P = %s, Q = %s\n",$n ,$p, $q);
    
    echo sprintf("1. %s mod %s * %s = %s\n",$n, $p, $q, $n%$p*$q);

    echo sprintf("2. %s mod %s div %s = %s\n",$n, $p, $q, intdiv($n%$p,$q) );

    echo sprintf("3. %s = %s or %s <= %s = %s\n",$n, $p, $n,$q,$n == $p || $n <= $q); # true = 1, false n'affiche rien.

    $t = 'N'.'P';
    $t++;
    echo sprintf("4. SUCC('N'+'P') = %s\n", $t);

    $c = 'e';
    $d = ord("$c"); # toujours utiliser ord avec la variable et non la valeur.
    $d--;
    $d = chr($d);
    $d = $d.$c;
    echo sprintf("5. PRED(%s) + 'e' = %s\n",$c, $d);
   
    $res = ord($c) +2.5;
    echo sprintf("6. ORD(%s) + 2.5 = %s\n",$c, $res);

    $succ = ord($c);
    $succ++;
    echo sprintf("7. CHR(SUCC(ORD(%s))) = %s",$c, chr($succ));
