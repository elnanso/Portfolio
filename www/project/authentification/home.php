<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>

        <div class="div-contact">
            
            <form action="add_contact.php" method="post">

                <label for="nom" class="label">
                    nom
                    <input id="nom" type="text" name="nom">
                </label>
                <label for="prenom" class="label">
                    prenom
                    <input id="mdp" type="text" name="prenom">
                </label>
                <label for="mail" class="label">
                    mail
                    <input id="mail" type="text" name="mail">
                </label>


                <input id="submit" type="submit" value="Ajouter aux contacts">
            </form>
            
        </div>

        <div class='div-view-contact'>

            <table border=1>
                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>mail</th>
                </tr>

                <?php
                    require('connection_db.php');

                    $id = $_SESSION['id'];

                    $req = "SELECT * FROM contact WHERE user_id = ".$id.";";

                    $result = $conn->query($req);

                    

                    for($i = 0; $i< $result->num_rows; $i++){
                        $row = $result->fetch_assoc();
                        echo "<tr> <td>".$row['nom']."</td> <td>".$row['prenom']."</td> <td>".$row['mail']."</td><td><a href='delete_contact.php?id_contact=".$row['id']."'>delete</a>.</td></tr>";
                    }


                ?>
                

            </table>

        </div>



    </body>
</html>
