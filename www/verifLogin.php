<?php
session_start();

$username = $_POST["username"] ?? '';
$password = $_POST["password"] ?? '';

if ($username === 'Root' && $password === 'portfolio85') {
        $_SESSION['username'] = $username;
        echo json_encode(['redirect_url' => 'home.php']);
} else {

        $_SESSION['erreur'] = '1';
        echo json_encode(['redirect_url' => 'login.php']);
}

?>