<?php
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // Créez une instance de PHPMailer

try {
    // Configuration du serveur SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Remplacez par l'hôte SMTP de votre serveur
    $mail->SMTPAuth   = true;
    $mail->Username   = 'riton987654@gmail.com'; // Votre adresse email
    $mail->Password   = 'qfvr flob shyb rtsn'; // Votre mot de passe email
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Utilisez ENCRYPTION_SMTPS pour SSL
    $mail->Port       = 587; // Utilisez 465 pour SSL, 587 pour TLS

    // Définir l'expéditeur et le destinataire
    $mail->setFrom('riton987654@gmail.com', 'Axel');
    $mail->addAddress('delannoy-axel@outlook.fr', 'Delannoy');

    // Contenu de l'email
    $mail->isHTML(true);
    $mail->Subject = 'Sujet du message';
    $mail->Body    = 'Corps du message en <b>HTML</b>';
    $mail->AltBody = 'Corps du message en texte brut';

    // Envoyer l'email
    $mail->send();
    echo 'Message envoyé avec succès';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
}
