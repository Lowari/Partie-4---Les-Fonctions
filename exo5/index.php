<!-- ## Exercice 5
Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. -->
<?php

function concatVariable($nb, $string){
    return "$nb $string";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
</head>
<body>
    <p><?= concatVariable(4, 'maison') ?></p>
</body>
</html>