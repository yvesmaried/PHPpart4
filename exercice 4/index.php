<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 4</title>
</head>

<body>
    <h1>exercice 4</h1>
    <p></p> Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
    <ul>
        <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
        <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
        <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
    </ul>

    <?php
    
    function showN($isNumber1, $isNumber2){
        if ($isNumber1 > $isNumber2){
            $message = 'Le premier nombre est plus grand.';
        } else if ($isNumber1 < $isNumber2){
            $message = 'Le premier nombre est le plus petit.';
        } else if ($isNumber1 == $isNumber2){
            $message = 'Les deux nombres sont identiques.';
        }
        return $message;
    }
    
    echo showN(12, 6);

    ?>
</body>

</html>