<?php
session_start();

if (empty($_SESSION["reponse_1"])) {
    header("location: PremiereQuestion.php");
    exit;
}


$message_erreur = "";
if (isset($_GET["repondre"])) {
    if (empty($_GET["reponse_2"])) {
        $message_erreur = "Il faut choisir une réponse à <b>Question 2</b> svp!";
    } else {
        $_SESSION["reponse_2"] = $_GET["reponse_2"];
        header("location: Resultat.php");
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Deuxième Question</title>
</head>

<body>
    <form>

        <fieldset>
            <span>C'est quoi la réponse de la <b>Deuxième</b> question ?</span>
        </fieldset>

        <fieldset class="error"><?= $message_erreur ?></fieldset>

        <fieldset class="choix">
            <?php for ($i = 1; $i <= 4; $i++) { ?>
                <label for="reponse_<?= $i ?>"><input type="radio" name="reponse_2" id="reponse_<?= $i ?>" value="reponse_2_<?= $i ?>">réponse <?= $i ?></label>
            <?php } ?>
        </fieldset>

        <fieldset>
            <button type="submit" name="repondre" value="oui">Répondre</button>
        </fieldset>

    </form>
</body>

</html>