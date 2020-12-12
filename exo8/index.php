<!-- ## Exercice 8
Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut. -->
<?php
/**
 * @param number on récupére un premier nombre
 * @param number on récupére un deuxième nombre
 * @param number on récupére un troisième nombre
 * 
 * @return string on renvoi une phrase avec le détail du calcul et son résultat !
 */
function addition($nb1 = 2, $nb2 = 3, $nb3 = 4)
{
    if (is_numeric($nb1) && is_numeric($nb2) && is_numeric($nb3)) {
        $result = $nb1 + $nb2 + $nb3;
        return "$nb1 + $nb2 + $nb3 = $result";
    } else if (!is_numeric($nb1) && !is_numeric($nb2) && !is_numeric($nb3)) {
        return "$nb1 $nb2 $nb3 ne sont pas des nombres, veuillez modifier";
    } else if (!is_numeric($nb1)){
        return "$nb1 n'est pas un nombre veuillez modifier";
    } else if (!is_numeric($nb2)){
        return "$nb2 n'est pas un nombre, veuillez modifier";
    } else if (!is_numeric($nb3)){
        return "$nb3 n'est pas un nombre, veuillez modifier";
    } else {
        return "Erreur système !";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8</title>
</head>

<body>

    <p><?= addition() ?></p>

</body>

</html>