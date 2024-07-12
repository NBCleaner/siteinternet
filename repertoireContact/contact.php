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
        require '../vendor/autoload.php';

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        // Je Crée une instance de PHPMailer
        $mail = new PHPMailer(true);

        $errors = [];
        $name = $surname = $email = $phone = $message = "";
        $formSubmitted = false;

        // Nettoyage des données pour éviter les failles XSS
        function clean_input($data)
        {
            return htmlspecialchars(stripslashes(trim($data)), ENT_QUOTES, 'UTF-8');
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
                    $mail->Host       = 'smtp.gmail.com';
                    // Oblige l'authentification au serveur smtp pour envoyer des mails pour evitez les spam et + de sécurité 
                    $mail->SMTPAuth   = true;
                    // Email et mot de passe de connexion à la boite email qui servira a la conexion smtp et autorisé l'envoie d'email via se compte 
                    $mail->Username   = 'riton987654@gmail.com';
                    $mail->Password   = 'qfvr flob shyb rtsn';
                    // Protections des données envoyées entre le serveur et le serveur smtp
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;
                    $mail->CharSet    = 'UTF-8';

                    // Configuration de l'adresse email émettrice et de celle destinataire
                    $mail->setFrom('riton987654@gmail.com', 'Axel');
                    $mail->addAddress('delannoy-axel@outlook.fr', 'Delannoy');

                    $mail->isHTML(true);
                    $mail->Subject = 'Message de contact depuis le site web';
                    $mail->Body    = "Nom: $name<br>Prénom: $surname<br>Email: $email<br>Téléphone: $phone<br><br>Message:<br>$message";
                    $mail->AltBody = "Nom: $name\nPrénom: $surname\nEmail: $email\nTéléphone: $phone\n\nMessage:\n$message";

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
            <div>
                <input type="checkbox" id="consent" name="consent" required>
                <label for="consent">J'accepte la collecte et le traitement de mes données personnelles conformément à la <a href="../public/privacity_policy.php">politique de confidentialité</a>. </label>
            </div>
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
</main>

<?php
$content = ob_get_clean();
$wrapperName = "wrapperContact";
$title = "Contact";
require "../public/template.php";
?>