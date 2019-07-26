<?php
include '../config.php';

// Insertion du message à l'aide d'une requête préparée
$req = $pdo->prepare("SELECT pseudo, message, created_at FROM messages WHERE created_at >= '2010-04-02 00:00:00' AND date <= '2010-04-18 00:00:00'");
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: ../minichat.php');

// SELECT pseudo, message, date FROM messages WHERE date BETWEEN '2010-04-02 00:00:00' AND '2010-04-18 00:00:00'


?>

