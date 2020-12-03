<?php
    $va = 70;
    $vb = 55;
    $d = 60;

    $t = $d / ($va + $vb);
    $t = $t * 3600;
    $h = intdiv($t, 3600);
    $m = intdiv($t%3600, 60);
    $s = $t%3600%60;

    echo "<div>Va = {$va} km/h, Vb = {$vb} Km/h, Distance = {$d} Km, Temps pour rencontre = {$h}h:{$m}m:{$s}s</div>";