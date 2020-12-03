<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>
<body>
    <form action="exercice_24.php" method="post">
        <input type="number" min="0" name="hauteur" placeholder="Hauteur(cm)" required>
        <input type="number" min="0" name="largeur" placeholder="Largeur(cm)" required>
        <input type="number" min="1" step="1" name="resolution" placeholder="Résolution(dpi)" required>
        <input type="submit">
    </form>
</body>
</html>
<?php 
    if (isset($_POST['hauteur'])) {

        $a = $_POST['hauteur'];
        $b = $_POST['largeur'];
        $c = $_POST['resolution'];

        $pxNb = $a*$b*pow($c,2);
        $bitNb = $pxNb*24;
        $weightMo = intdiv($bitNb, 1e6);
        $weightKo = intdiv($bitNb%1e6, 1e3);
        $weightBit = $bitNb%1e6%1e3;

        echo "<div>H : {$a} cm , l : {$b} cm, Résolution : {$c} dpi.</div>";
        echo "<div>Nb Pixels : {$pxNb}, Poids : {$weightMo} Mo {$weightKo} Ko {$weightBit} o.</div>";

    }