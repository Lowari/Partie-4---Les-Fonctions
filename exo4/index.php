<!-- ## Exercice 4
Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
- **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième
- **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième
- **Les deux nombres sont identiques** si les deux nombres sont égaux -->
<?php

function compareNb($nb1, $nb2)
{
    if (is_numeric($nb1) && is_numeric($nb2)) {
        if ($nb1 > $nb2) {
            return "$nb1 est plus grand que $nb2.";
        } else if ($nb1 < $nb2) {
            return "$nb1 est plus petit que $nb2.";
        } else if ($nb1 == $nb2) {
            return "$nb1 et $nb2 sont identiques.";
        }
    } else if (!is_numeric($nb1) && !is_numeric($nb2)) {
        return "$nb1 et $nb2 ne sont pas des nombres !";
    } else if (!is_numeric($nb1)) {
        return "$nb1 n'est pas un nombre !";
    } else if (!is_numeric($nb2)) {
        return "$nb2 n'est pas un nombre !";
    } else {
        return "Une erreur est survenue";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Exo4</title>
</head>

<body>
    <div class="text-center">
        <p><?= compareNb(7, 7) ?></p>
    </div>


</body>

</html>