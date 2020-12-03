<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Durée</title>
</head>
<body>
<form action="exercice_17.php" method="post">
        <input type="number" min="0" name="a" placeholder="Temps en seconde(s)" required>
        <input type="submit">
    </form>
</body>
</html>

<?php 
    if (isset($_POST['a'])) { 
        $a = $_POST['a'];
        $h = intdiv($a, 3600);
        $m = intdiv($a%3600, 60);
        $s = $a%3600%60;
        echo sprintf("<div>%ss --> %sh:%sm:%ss</div>", $a, $h, $m, $s);
    }