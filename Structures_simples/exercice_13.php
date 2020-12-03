<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division</title>
</head>
<body>
    <form action="exercice_13.php" method="post">
        <input type="number" name="a" placeholder="Dividende" required>
        <input type="number" name="b" placeholder="Diviseur" required>
        <input type="submit">
    </form>
</body>
</html>

<?php 

if (isset($_POST['a'])) {
   
    $dividende = $_POST['a'];
    $diviseur = $_POST['b'];
    
    if ($dividende != 0) {

        if ($diviseur != 0) {
            $res = $dividende / $diviseur;
            echo sprintf("<div>%s/%s = %s</div>", $dividende, $diviseur, $res);
        } else {
            echo sprintf("<div>Diviseur nul. opération impossible.</div>");
        }

    } else {
       
        echo sprintf("<div>La dividende ne peut pas être nulle.</div>"); 
    }     
}