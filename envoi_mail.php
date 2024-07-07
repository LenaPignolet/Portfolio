<?php

session_start();
$_SESSION['information']='';

// Initialisation des variables
$erreurs = 0;
$affichage_retour = '';

// Vérification de l'adresse mail
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if (!$email) {
    $affichage_retour .= 'Adresse mail incorrecte<br>';
    $erreurs++;
}

// Vérification du prénom
$prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
if (!empty($_POST['prenom'])) {
	$prenom=$_POST['prenom'];
} else {
    $affichage_retour .='Le champ Prénom est obligatoire<br>';
        $erreurs++;
}

// Vérification du nom
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
if (!empty($_POST['nom'])) {
	$nom=$_POST['nom'];
} else {
    $affichage_retour .='Le champ Nom est obligatoire<br>';
        $erreurs++;
}

// Vérification du message
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
if (empty($message)) {
    $affichage_retour .= 'Le champ MESSAGE est obligatoire<br>';
    $erreurs++;
}

// Affichage des erreurs et arrêt du script si des erreurs sont détectées
if ($erreurs > 0) {
    echo $affichage_retour;
    exit();
}

// Préparation des variables pour l'envoi du mail de contact
$headers = "From: " . htmlspecialchars($email) . "\r\n";
$headers .= "Reply-To: " . htmlspecialchars($email) . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

// Adresse du destinataire
$email_dest = "lena.pignolet.pro@gmail.com";

// Envoi du mail de contact
if (mail($email_dest, htmlspecialchars($prenom), htmlspecialchars($nom), htmlspecialchars($message), $headers)) {
    // Préparation et envoi du mail de confirmation à l'utilisateur
    $subject_confirmation = 'Mail de confirmation';
    $message_confirmation = '
    <html>
    <head>
        <title>Confirmation d\'envoi</title>
    </head>
    <body>
        <p>Merci pour votre message !</p>
        <p>Je vous répondrais dans les plus brefs délais.</p>
        <p>Cordialement,</p>
        <p>Léna Pignolet</p>
    </body>
    </html>';

    // Headers pour le mail de confirmation
    $headers_confirmation = "From: no-reply@lena-pignolet.fr\r\n";
    $headers_confirmation .= "Reply-To: no-reply@lena-pignolet.fr\r\n";
    $headers_confirmation .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers_confirmation .= "MIME-Version: 1.0\r\n";
    $headers_confirmation .= "Content-type: text/html; charset=utf-8\r\n";

    if (mail($email, $subject_confirmation, $message_confirmation, $headers_confirmation)) {
        // Envoi réussi du mail de confirmation à l'utilisateur
        // header('Location: index.php?message=success');
        $affichage_retour .= "Votre mail à bien été envoyé<br>*";
        $erreurs++;
    } else {
        // Envoi échoué du mail de confirmation à l'utilisateur
        // header('Location: index.php?message=error');
        $affichage_retour .= "L'envoi du mail à échoué<br>*";
        $erreurs++;
    }
} else {
    // Envoi échoué du mail de contact
    $affichage_retour .= 'Un problème est survenu. Merci de réessayer<br>*';
    $erreurs++;
}

$_SESSION['information']=$affichage_retour;

?>