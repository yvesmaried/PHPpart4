<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3</title>
</head>
<body>
<h1>exercice 3</h1>
    <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.</p>

    <?php
    
        
    function returnS($stringA, $stringB){
        return $stringA.' '. $stringB;
    }
    echo returnS('bonjour', 'lapin');

    ?>
</body>
</html>