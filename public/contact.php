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

                // Défini les variables de l'email
                $to = "delannoy-axel@outlook.fr";
                $subject = "Message de contact depuis le site web";
                $body = "Nom: $name\nPrénom: $surname\nEmail: $email\nTéléphone: $phone\n\nMessage:\n$message";
                $headers = "From: $email\r\n";
                $headers .= "Reply-To: $email\r\n";
                $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

                // Envoi de l'email
                if (mail($to, $subject, $body, $headers)) {
                    echo "<p>Merci pour votre message !</p>";
                    $formSubmitted = true;

                    // Réinitialisation des champs après succès
                    $name = $surname = $email = $phone = $message = "";
                } else {
                    $errors[] = "Une erreur est survenue lors de l'envoi de votre message. Veuillez réessayer.";
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
require "../template.php";
?>