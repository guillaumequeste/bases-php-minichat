<?php
include 'config.php';

// Insertion du message à l'aide d'une requête préparée
$req = $pdo->prepare('INSERT INTO messages (pseudo, message, created_at) VALUES(?, ?, NOW())');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>