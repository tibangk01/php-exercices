<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conjugaison</title>
</head>
<body>
    <form action="exercice_18.php" method="post">
        <input type="text" name="a" placeholder="Entrer le verbe" required>
        <input type="submit">
    </form>
</body>
</html>

<?php 

    if (isset($_POST['a'])) {

        $a = $_POST['a'];
        echo sprintf("<p>Je %sai,</p>",$a);
        echo sprintf("<p>Tu %sas,</p>",$a);
        echo sprintf("<p>Il/Elle/On %sa,</p>",$a);
        echo sprintf("<p>Nous %sons,</p>",$a);
        echo sprintf("<p>Vous %sez,</p>",$a);
        echo sprintf("<p>Ils/Elles %sont.</p>",$a);
    }