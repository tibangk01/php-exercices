<?php 
    $a = 6 + intdiv(2*5, 3) -10;
    echo sprintf("Résultat de : '6 + intdiv(2*5, 3) -10' = %s\n", $a);
    
    $b = (5 > 2) || (8 < 8) && !(6 == 6);
    echo sprintf("Résultat(1 = true, 0 = false) de : '(5 > 2) || (8 < 8) && !(6 == 6)' = %s\n", $b);

    #$c = variant_int(10.5); --> variant_int() ne fonctionne pas.
    $c = (int)(10.5);
    echo sprintf("Partie entière de '10.5' = %s\n", $c);

    $d = round(10.5);
    echo sprintf("Arrondi de '10.5' = %s\n", $d);

    $e = rand(0,6)+4;
    echo sprintf("Génération d'un nombre aléatoire entre 0 et 6 additionné à 4 = %s\n", $e);

    $f = '0025.38';
    if (is_numeric($f)) {
        echo sprintf("Vérification si la chaîne '0025.38' est numérique et casting vers le type numérique adéquat = %s\n",(float)$f);
    }
    
    #$g =strlen(substr("ch",0,0)); --> correction de l'ennoncé original.
    $g =substr("ch",0,1);
    echo sprintf("Chaîne de longueur 1(donc caractère) extraite de 'ch' à partir de la position 0 = %s\n", $g);

    $h = strpos('PASCAL',strtoupper('a'));
    echo sprintf("Position de la première occurence de 'a' magiscule dans 'PASCAL' = %s\n", $h);

    $i = 'Information';
    $i = substr_replace($i, '',strlen($i) - 1,3);
    echo sprintf("Effacement de 3 caractères dans 'Information' à partir du 10ème caractère = %s\n", $i);



