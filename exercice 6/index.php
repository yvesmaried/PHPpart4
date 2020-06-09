<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 6</title>
</head>

<body>
    <h1>exercice 6</h1>
    <span>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer
        une chaine de la forme :</span>
    <span>Bonjour + nom + prénom + , tu as + age + ans.</span>

    <?php
    
    function returnD($lastname, $firstname, $age){
        return "Bonjour  $lastname $firstname tu as  $age ans.";
    }
    echo returnD('robert', 'guy', 101);

    ?>
</body>

</html>