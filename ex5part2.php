<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 5 - Partie 2</title>
</head>
<body>
<?php
$genderArray= array("Homme", "Femme");
$genderRand= array_rand($genderArray);
$gender= $genderArray[$genderRand];
?>

<?= "$gender "; ?>
<?=$gender!="Homme" ? "C'est une développeuse !" : "C'est un développeur !";?><br>
</body>
</html>