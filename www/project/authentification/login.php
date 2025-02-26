<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>

        <div class="big-container">
            
            <form action="check_login.php" method="post">

                <label for="log" class="label">
                    login
                    <input id="log" type="text" name="log">
                </label>
                <label for="mdp" class="label">
                    password
                    <input id="mdp" type="password" name="mdp">
                </label>

                <div class="lil-container">
                    <a href="new_user.php">Vous n'avez pas de compte ?</a>
                </div>

                <input id="submit" type="submit" value="Connexion">
            </form>
            
        </div>

        <script>
        window.onload = function() {

            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            const error = urlParams.get('error');

            if (status !== null) {
                console.log(status);
                if (status === 'success') {
                    window.alert("La création de compte s'est effectuée avec succès");
                } else {
                    window.alert("Erreur lors de la création du compte. Détails : " + error);
                }
            }

        };
    </script>

    </body>
</html>
