<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulation Avalanche</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4; /* Optionnel : couleur de fond pour plus de contraste */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center; 
            gap: 10px; 
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }

        label {
            display: flex;
            flex-direction: column;
            align-items: center; 
        }

        input[type='number'] {
            width: 100px; 
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type='submit'] {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type='submit']:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Entrez une largeur : </h1>
<form method='post' action='save_input.php'>
    
    <label>
        <input name='largeur' type='number' required>
    </label>
    
    <input type='submit'>
</form>

</body>
</html>
