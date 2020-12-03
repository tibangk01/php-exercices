<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortie Inverse</title>
</head>
<body>
    <form action="exercice_3.php" method="post">
        <input type="number" name="a" placeholder="nb 1" required>
        <input type="number" name="b" placeholder="nb 2" required>
        <input type="number" name="c" placeholder="nb 3" required>
        <input type="submit">
    </form>
</body>
</html>
<?php 

    if (isset($_POST['a'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        echo sprintf("<p>Saisie : %s - %s - %s</p>\n", $a, $b, $c);
        echo sprintf("<p>Sortie Inverse : %s - %s - %s</p>", $c, $b, $a);
    }
