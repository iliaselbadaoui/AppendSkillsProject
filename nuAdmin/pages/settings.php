<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/nuStyle.css">
</head>
<style type="text/css">
    body{
        padding: 64px;
        display: flex;
        flex-direction: column;
    }
</style>
<body>
    <div class="renderer">
        <table class="profil">
            <tr>
                <td rowspan="7"><img src="../assets/octocat.png"></td>
                <td>Nom :</td>
                <td id="nom">.....</td>
            </tr>
            <tr>
                <td>Prénom :</td>
                <td id="prenom">.....</td>
            </tr>
            <tr>
                <td>Pays :</td>
                <td id="pays">.....</td>
            </tr>
            <tr>
                <td>Ville :</td>
                <td id="ville">.....</td>
            </tr>
            <tr>
                <td>Adresse :</td>
                <td id="adresse">.....</td>
            </tr>
            <tr>
                <td>Téléphone :</td>
                <td id="tel">.....</td>
            </tr>
            <tr>
                <td>Email :</td>
                <td id="email">.....</td>
            </tr>
            <tr>
                <td></td>
                <td><button id="changerPasse" class="Neutral_BTN">Changer le mot de passe</button></td>
                <td><button id="modifierProfil" class="Neutral_BTN">Modifier</button></td>
            </tr>
        </table>
    </div>
    <script src="../js/activities/settings.js" type="text/javascript"></script>
</body>
</html>