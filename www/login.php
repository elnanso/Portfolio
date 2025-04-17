<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PF</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="/javascript/login.js"></script>
    <link rel="stylesheet" href="/style/login.css">
</head>
<body>
    <div id="BigDivLogin">

        <div id="DivTitre">
            <h4>Recueillir les identifiants auprès du candidat.</h4>
        </div>

        <?php if(isset($_SESSION['erreur']) && $_SESSION['erreur'] == '1'): ?>
            <p id="textError">Username ou mot de passe incorrect.</p>
        <?php endif; ?>

        <div id="DivChamps">
            <input type="text" placeholder="Username" name="inputUserName" id="inputUserName">
            <input type="password" placeholder="Password" name="inputPassword" id="inputPassword">
            <button id="submitButton">Entrer</button>
        </div>

    </div>
</body>
</html>