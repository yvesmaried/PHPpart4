<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 5</title>
</head>
<body>
<h1>exercice 5</h1>
    <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>

    <?php
    
    function returnD($number, $string){
        return "$number $string";
    }
    echo returnD(102, "lapin");


    ?>
</body>
</html>