<!-- ## Exercice 7
Faire une fonction qui prend deux paramètres : **l'âge et le genre d'une personne**. Le genre peut être :
- Homme
- Femme  

La fonction doit renvoyer en fonction des paramètres :
- **Vous êtes un homme et vous êtes majeur**
- **Vous êtes un homme et vous êtes mineur**
- **Vous êtes une femme et vous êtes majeur**
- **Vous êtes une femme et vous êtes mineur**

Gérer tous les cas. -->
<?php 

function whoAreYou($gender, $age){
    if ($gender == "homme"){
        if ($age < 18){
            return "Vous êtes un $gender et vous êtes mineur";
        } else {
            return "Vous êtes un $gender et vous êtes majeur";
        }
    } else if ($gender == "femme"){
        if ($age < 18){
            return "Vous êtes une $gender et vous êtes mineur ";
        } else {
            return "Vous êtes une $gender et vous êtes majeur";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>
<body>
    
    <p><?= whoAreYou('homme', 18) ?></p>

</body>
</html>