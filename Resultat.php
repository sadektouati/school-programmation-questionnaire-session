<?php
session_start();

if (empty($_SESSION["reponse_1"]) or empty($_SESSION["reponse_2"])) {
    header("location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Résultat</title>
</head>

<body>
    <div>
        <?php
        if ($_SESSION["reponse_1"] === "reponse_1_1" and $_SESSION["reponse_2"] === "reponse_2_1") {
            echo "Félicitation! <b>2</b> réponses correctes";
        } else if ($_SESSION["reponse_1"] === "reponse_1_1" or $_SESSION["reponse_2"] === "reponse_2_1") {
            echo "<b>1</b> seule réponse correcte, malheureusement vous avez perdu :(";
        } else {
            echo "Aucune réponse correcte, malheureusement vous avez perdu :(";
        }
        ?>
        <div>
            <a href="index.php?recommencer=oui">Recommencer</a>
        </div>
    </div>

</body>

</html>