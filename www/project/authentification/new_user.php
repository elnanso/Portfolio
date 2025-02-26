<!DOCTYPE html>
<html>
    <head>
        <title>NEW USER</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="new_user.css">
    </head>

    <body>

        <div class="big-container">
            
            <form action="enregistre.php" method="post">
                <h2> Création d'un User</h2>
                <label for="log" class="label">
                    login
                    <input id="log" type="text" name="log">
                </label>

                <label for="mdp" class="label">
                    password
                    <input id="mdp" type="password" name="mdp">
                </label>
                
                <div class="div-mail">
                <label for="mail" class="label">
                e-mail
                    <input id="mail" type="text" name="mail">
                </label>
                </div>
                

                <div class="lil-container">
                    <a href="login.php">Vous avez déjà un compte</a>
                </div>

                <input id="submit" type="submit" value="Créer">
            </form>
            
        </div>

    </body>
</html>
