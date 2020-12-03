<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intérêt Simple</title>
</head>
<body>
    <form action="exercice_19.php" method="post">
        <input type="number" min="0" name="capital" placeholder="Capital" required>
        <input type="number" min="0.001" step="0.01" name="interet" placeholder="intérêt" required>
        <input type="submit">
    </form>
</body>
</html>

<?php 

if (isset($_POST['capital'])) {

    $duree = 5;
    $capital = $_POST['capital'];
    $interet = $_POST['interet'];
    $interetFois100 = $interet*100;  
    #% --> interdit par sprintf qui empêche d'ecrire x% comme chîne de caractère.
    $va = $capital*$interet*$duree;
    #echo sprintf("<div> Capital : %s, Intérêt : %s, Durée : %s, Valeur acquise : %s.</div>", $capital, $interet, $duree, $va);
    echo "<div>Capital : {$capital}, Intérêt : {$interetFois100} %, Durée : {$duree} ans, Valeure Acquise : {$va}</div>";
}