<!-- ## Exercice 6
Faire une fonction qui prend trois paramètres : **le nom, le prénom et l'âge d'une personne**. Elle doit renvoyer une chaine de la forme :  
"Bonjour" + **nom** + **prénom** + ",tu as" + **age** + "ans". -->
<?php 

function phrase($nom, $prenom, $age){
    return "Bonjour $nom $prenom, tu as $age ans.";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco6</title>
</head>
<body>

    <p><?= phrase("freret", "julien", 25) ?></p>
    
</body>
</html>