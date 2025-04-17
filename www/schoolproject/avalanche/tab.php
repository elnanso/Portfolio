<?php session_start();
include 'function.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avalanche</title>
    
    <style>
        html{
            width:100%;
            height:100%;
        }
        body {
            width:100%;
            height:100%;
            display:flex;
            flex-direction:column;
            align-items: center;
            justify-content: center;
            background-color: black;
        }
        table {
            margin-top:20px;
            border-collapse: collapse; 
            width: fit-content;
            border-color: white;
            width: 80vw;
            height: 80vh;
        }
        tr {
            border-collapse:collapse;
        }
        td {
            flex:1; 
            border-collapse:collapse;
            box-sizing: border-box; /*pour margin*/
        }
        input{
            margin-top:10px;
        }
    </style>
</head>
<body>
    <?php 
        print_tableau($_SESSION['tab'])
    ?>
    <form method='post' action='tour_suivant.php'>
        <input id='tour' type='submit' value='Start' style="background-color:white;">
    </form>
    <?php if($_SESSION['changement']==true):?>
                <script>
                    setTimeout(() => {
                    document.getElementById('tour').click();
                    }, 50);
        
                </script>
    <?php endif;?>
</body>
</html>
