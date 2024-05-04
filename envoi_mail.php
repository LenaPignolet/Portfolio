<?php

session_start();
$_SESSION['information']='';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];

// Vérification des données du formulaire

$affichage_retour = '';														
$erreurs=0;

// Variable pour stocker les messages d'erreur des champs
$erreurs_champs = [];

// Vérification des noms et prénoms (incluant les accents)
if (!empty($nom) && !preg_match('/^[a-zA-ZÀ-Öá-ÿ\'\- ]+$/', $nom)) {
  $erreurs_champs['nom'] = 'Le nom doit contenir uniquement des lettres, des accents, des tirets et des espaces.';
  $erreurs++;
}

if (!empty($prenom) && !preg_match('/^[a-zA-ZÀ-Öá-ÿ\'\- ]+$/', $prenom)) {
  $erreurs_champs['prenom'] = 'Le prénom doit contenir uniquement des lettres, des accents, des tirets et des espaces.';
  $erreurs++;
}
  
if (!empty($_POST['nom'])) {
  $prenom = <span class="math-inline">\_POST\['nom'\];
if \(\!preg\_match\("/^\[a\-zA\-Z \\'\-\]\+</span>/", $nom)) {
    $erreurs_champs['nom'] = 'Le nom doit contenir uniquement des lettres, des tirets et des espaces.';
    $erreurs++;
  }
} else {
  $erreurs_champs['nom'] = 'Le champ Nom est obligatoire.';
  $erreurs++;
}

if (!empty($_POST['email'])) {
    // Si le champ email contient des données
        // Verification du format de l'email
        if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $email=$_POST['email'];
      } else {
      // Si l'email est incorrect on retourne au formulaire  
         $affichage_retour .='Adresse mail incorrecte<br>';
        $erreurs++;
      }
  // Si le champ email est vide, on retourne au formulaire     
  } else {
$affichage_retour .='Le champ email est obligatoire<br>';
$erreurs++;
}

if (!empty($_POST['message'])) {
    $message = $_POST['message'];
    if (strlen($message) > 2500) {
      $affichage_retour .= 'Le message ne doit pas dépasser 2500 caractères.<br>';
      $erreurs++;
    }
  } else {
    $affichage_retour .= 'Le champ Message est obligatoire.<br>';
    $erreurs++;
  }


// Affichage des messages d'erreur des champs
echo '<div id="retour_mail">';
foreach ($erreurs_champs as $champ => $messageErreur) {
  echo '<p id="' . $champ . '_error" class="error-message">' . $messageErreur . '</p>';
}
echo '</div>';

//Traitement des données

$prenom=ucfirst(mb_strtolower($prenom));
$nom=ucfirst(mb_strtolower($nom));

// Affichage des données du formulaire 
echo 'Votre nom : '.$prenom.' '.$nom.'<br>';
echo 'Adresse mail : '.$email.'<br>';
echo 'Message : '.$message.'<br>';

//Préparation des variables pour l'envoi du mail de contact
// $subject='Confirmation de votre demande sur SAE105';

$headers['From'] = $_POST['email']; // Remplacer par l'adresse email de l'utilisateur
$headers['Reply-To'] = $_POST['email']; // Remplacer par l'adresse email de l'utilisateur
$headers['X-Mailer'] = 'PHP/' . phpversion();
$headers['MIME-Version'] = '1.0';
$headers['content-type'] = 'text/html; charset=utf-8';

$mail_content="Bonjour $prenom $nom, <br><br> $demande.";

// On fixe l'adresse du destinataire - Pour ce Mail il s'agit de notre adresse MMI@mmi-troyes.fr
$email_dest="mmi23h13@mmi-troyes.fr";

if ($erreurs == 0) {

//Envoi du mail avec confirmation d'envoi
if (mail($email_dest,$subject,$message,$headers)) {
echo "Mail de Contact OK";									// On confirme l'envoi du message
}else {
echo "Erreur d'envoi du mail de contact";					// Le message n'a pas été envoyé - Erreur de traitement
}

//Envoi du mail avec confirmation d'envoi
if (mail($email,$subject,$mail_content,$headers)) {
    echo "Mail de Contact OK";									// On confirme l'envoi du message
    }else {
    echo "Erreur d'envoi du mail de contact";					// Le message n'a pas été envoyé - Erreur de traitement
    }
     // Détermination du message à affichée après les tentatives d'envoi
  	$affichage_retour='Votre demande à bien été envoyée';
    
  	if ($erreurs != 0) {
    $affichage_retour='Echec de l\'envoi du message';
    }
}

$_SESSION['information']=$affichage_retour;
header('location: ../index.php');


?>