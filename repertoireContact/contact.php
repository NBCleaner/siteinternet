<?php ob_start(); ?>

<div class="navDecoration"></div>

<div class="contactQuestion">

    <h2>Restons en contact</h2>

    <div class="informationContact">
        <div>
            <p><i class="fa-solid fa-location-dot"></i> ADRESSE <br>
                14 bis, route de Bourbourg<br>
                59210 Coudekerque-Branche
            </p>
        </div>

        <div>
            <p><i class="fa-solid fa-phone"></i> TÉLÉPHONE <br>
                07.83.35.49.34
            </p>
        </div>
    </div>
</div>

<main>
    <div class="containerContact">
        <h1>Une question ?</h1>
        <p>Pour tout renseignement, contactez-nous.</p>


        <?php
        require '../vendor/autoload.php'; // Inclure l'autoloader de Composer

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        $mail = new PHPMailer(true); // Créez une instance de PHPMailer

        $errors = [];
        $name = $surname = $email = $phone = $message = "";
        $formSubmitted = false;

        // Nettoyage des données pour éviter les failles XSS
        function clean_input($data)
        {
            return htmlspecialchars(stripslashes(trim($data)));
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $errors[] = "Le nom est requis.";
            } else {
                $name = clean_input($_POST["name"]);
            }

            if (empty($_POST["surname"])) {
                $errors[] = "Le prénom est requis.";
            } else {
                $surname = clean_input($_POST["surname"]);
            }

            if (empty($_POST["email"])) {
                $errors[] = "L'adresse email est requise.";
            } else {
                $email = clean_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "Format d'email invalide.";
                }
            }

            if (empty($_POST["phone"])) {
                $errors[] = "Le numéro de téléphone est requis.";
            } else {
                $phone = clean_input($_POST["phone"]);
            }

            if (empty($_POST["message"])) {
                $errors[] = "Le message est requis.";
            } else {
                $message = clean_input($_POST["message"]);
            }

            if (empty($errors)) {

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
                    $mail->Subject = 'Message de contact depuis le site web';
                    $mail->Body    = "Nom: $name<br>Prénom: $surname<br>Email: $email<br>Téléphone: $phone<br><br>Message:<br>$message";
                    $mail->AltBody = "Nom: $name\nPrénom: $surname\nEmail: $email\nTéléphone: $phone\n\nMessage:\n$message";

                    // Envoyer l'email
                    $mail->send();
                    $successMessage = "<p class =\"success-message\">Merci pour votre message !</p>";
                    $formSubmitted = true;

                    // Réinitialisation des champs après succès
                    $name = $surname = $email = $phone = $message = "";
                } catch (Exception $e) {
                    $errors[] = "<p class =\"error-list\">Une erreur est survenue lors de l'envoi de votre message. Erreur : {$mail->ErrorInfo}</p>";
                }
            }
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="contact-form">
            <input type="text" name="name" id="name" value="<?php echo $formSubmitted ? '' : $name; ?>" placeholder="Nom" required><br>
            <input type="text" name="surname" value="<?php echo $formSubmitted ? '' : $surname; ?>" placeholder="Prénom" required><br>
            <input type="email" name="email" value="<?php echo $formSubmitted ? '' : $email; ?>" placeholder="Email" required><br>
            <input type="tel" name="phone" value="<?php echo $formSubmitted ? '' : $phone; ?>" placeholder="Téléphone" required><br>
            <textarea name="message" placeholder="Votre message" required><?php echo $formSubmitted ? '' : $message; ?></textarea><br>
            <input type="submit" value="Envoyer">

            <?php if (!empty($successMessage)) {
                echo $successMessage;
            } 
            
            if (!empty($errors)) {
                echo '<ul>';
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo '</ul>';
            }

            ?>
            
        </form>

    </div>

    <?php



    if (!empty($errors)) {
        echo '<ul>';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
    }
    ?>

</main>

<?php
$content = ob_get_clean();
$wrapperName = "wrapperContact";
$title = "Contact";
require "../public/template.php";
?>