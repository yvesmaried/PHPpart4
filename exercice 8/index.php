<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 8</title>
</head>

<body>
    <h1>exercice 8</h1>
    <span>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.</span>
    <span>Tous les paramètres doivent avoir une valeur par défaut.</span>

    <?php
    
    function addNumber($number1 = 1, $number2 = 10, $number3 = 100){
        return $number1 + $number2 + $number3;
    }
    
    echo addNumber(9, 14, 83);

    ?>
</body>

</html>