<?php
include '../config.php';

// Insertion du message à l'aide d'une requête préparée
$req = $pdo->prepare("SELECT pseudo, message, created_at FROM messages WHERE created_at >= '2019-07-26 10:37:22'");
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: ../minichat.php');
?>