<!-- <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?> -->
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

    <link rel="icon" href="/favicon-32x32.png" type="image/x-icon">
    <link rel="icon" href="/favicon-32x32.png" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon-32x32.png">
    <link rel="icon" sizes="192x192" href="/favicon-32x32.png">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="mask-icon" href="/favicon-32x32.png">
    <meta name="theme-color" content="#ffffff">

    <title><?= $title ?></title>

</head>

<body>

    <!-- HEADER -->
    <header id="scrollNav">
        <img src="../public/img/logo.svg" alt="Logo de l'entreprise NBCleaner" onclick="window.location.href='../index.php';" style="cursor: pointer;">

        <div id="burger-icon">

        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li>
                    <div class="dropdownPrestations">
                        <button id="dropdownPrestationsButton">Prestations</button>
                        <div id="dropdownPrestationsContent" class="dropdownContent">
                            <ul>
                                <li><a href="../public/nettoyageExterieur.php">Nettoyage Extérieur</a></li>
                                <li><a href="../public/nettoyageInterieur.php">Nettoyage Intérieur</a></li>
                                <li><a href="../public/traitementCuir.php">Traitement du cuir</a></li>
                                <li><a href="../public/lustragePolissage.php">Lustrage / Polissage</a></li>
                                <li><a href="../public/nettoyageMoteur.php">Nettoyage Moteur</a></li>
                                <li><a href="../public/optiqueDePhares.php">Optiques de phare</a></li>
                                <li><a href="../public/poseCeramique.php">Pose Céramique</a></li>
                                <li><a href="../public/shampoinageSiege.php">Shampouinage des sièges</a></li>
                                <li><a href="../public/deflocageVehicule.php">Déflocage</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="../public/forfaits.php">Forfaits</a></li>
                <li><a href="../repertoireContact/contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="socials">

            <a href="https://www.facebook.com/Nb.cleanerauto/"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://www.snapchat.com/add/nbcleaner_auto"><i class="fa-brands fa-square-snapchat"></i></a>
        </div>
    </header>
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

    <main class="globalContainerForm">
        <div class="containerContact">
            <h1>Une question ?</h1>
            <p>Pour tout renseignement, contactez-nous.</p>


            <?php
            require '../vendor/autoload.php';



            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            $envFilePath = __DIR__ . '/../.env';

            if (file_exists($envFilePath)) {
                $lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach ($lines as $line) {
                    if (strpos(trim($line), '#') === 0) {
                        continue;
                    }
                    list($key, $value) = explode('=', $line, 2);
                    putenv(sprintf('%s=%s', trim($key), trim($value)));
                }
            } else {
                die('Le fichier .env est manquant.');
            }

            $mail = new PHPMailer(true);
            $errors = [];
            $name = $surname = $email = $phone = $message = "";
            $formSubmitted = false;

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
                        $mail->isSMTP();
                        $mail->Host       = getenv('SMTP_HOST');
                        $mail->SMTPAuth   = true;
                        $mail->Username   = getenv('SMTP_USERNAME');
                        $mail->Password   = getenv('SMTP_PASSWORD');
                        $mail->SMTPSecure = getenv('SMTP_ENCRYPTION');
                        $mail->Port       = getenv('SMTP_PORT');
                        $mail->CharSet    = 'UTF-8';

                        $mail->setFrom('riton987654@gmail.com', 'Axel');
                        $mail->addAddress('delannoy-axel@outlook.fr', 'Delannoy');

                        $mail->isHTML(true);
                        $mail->Subject = 'Message de contact depuis le site web';
                        $mail->Body    = "Nom: $name<br>Prénom: $surname<br>Email: $email<br>Téléphone: $phone<br><br>Message:<br>$message";
                        $mail->AltBody = "Nom: $name\nPrénom: $surname\nEmail: $email\nTéléphone: $phone\n\nMessage:\n$message";

                        $mail->send();
                        $successMessage = "<p class =\"success-message\">Merci pour votre message !</p>";
                        $formSubmitted = true;

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

    <!-- QUESTION -->
    <section class="question">
        <div>
            <p>Une question ?</p>
            <button class="buttonQuestion">
                <a href="../repertoireContact/contact.php">Contactez-nous !</a>
            </button>
        </div>
    </section>


    <!-- AVIS GOOGLE -->
    <section class="avis">
        <h2>Votre satisfaction, notre mission</h2>
        <div id="carousel">
            <div class="arrow left-arrow" id="arrow-left">&#10094;</div>
            <div class="review-container">
                <!-- Les avis sont ajoutés ici dynamiquement -->
            </div>
            <div class="arrow right-arrow" id="arrow-right">&#10095;</div>
        </div>
    </section>

    <!-- Partenaires -->
    <section class="partenaire">
        <h2>Ils nous font confiance pour leurs Véhicules</h2>
        <div class="container-partenaire">
            <div class="ligne1">
                <div><img src="../public/img/peugeot.svg" alt="logo peugeot"></div>
                <div><img src="../public/img/mercedes.svg" alt="logo mercedes"></div>
                <div><img src="../public/img/ds.svg" alt="logo dsautomobiles"></div>
            </div>
            <div class="ligne2">
                <div><img src="../public/img/citroen.svg" alt="logo citroen"></div>
                <div><img src="../public/img/toyota.svg" alt="logo toyota"></div>
                <div><img class="arcelor" src="../public/img/arcelor mital.png" alt="logo arcelor mital"></div>
            </div>
        </div>
    </section>

    <!-- COORDONNEES -->
    <section class="coordonnees">
        <div class="carte"></div>
        <div class="infos">
            <h3>Coordonnées</h3>
            <div>
                <p>14 bis, route de Bourbourg <br>
                    59210 Coudekerque-Branche</p>
            </div>
            <div>
                <p>Téléphone : <a href="tel:+33783354934">0783354934</a></p>
                <p>Mail : <a href="mailto:Nbcleaner.auto@gmail.com">Nbcleaner.auto@gmail.com</a></p>
            </div>

            <h3>Horaires d'ouverture</h3>
            <div>
                <p>Du lundi au vendredi :</p>
                <p>09:00 - 13:00 <br>
                    14:00 - 18:00</p>
            </div>
            <div>
                <p>Samedi :</p>
                <p>09:00 - 13:00</p>
            </div>
            <p>Fermé le dimanche.</p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-nav">
            <ul>
                <ul><a href="../index.php">Accueil</a></ul>
                <ul><a href="../public/forfaits.php">Forfaits</a></ul>
                <ul><a href="../repertoireContact/contact.php">Contact</a></ul>
            </ul>
        </div>
        <div>
            <p>Copyright 2024 | Tous droits réservés</p>
            <a href="../public/mentions_legal.php">Mentions légales</a> - <a href="../public/privacity_policy.php">Politique de confidentialité</a>
        </div>
        <div class="footer-socials">
            <a href="https://www.facebook.com/Nb.cleanerauto/">
                <span class="fa-stack facebook-icon">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fas fa-brands fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
            </a>

            <a href="https://www.snapchat.com/add/nbcleaner_auto">
                <span class="fa-stack snapchat-icon">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fas fa-brands fa-snapchat fa-stack-1x"></i>
                </span>
            </a>
            NB CLEANER
        </div>
    </footer>


    </div>

    <script src="https://kit.fontawesome.com/e33af3981e.js" crossorigin="anonymous"></script>
    <script src="../public/js/template.js"></script>
    <script src="../public/js/style.js"></script>
    <script src="../public/js/avis.js"></script>
    <script src="../public/js/burgerMenu.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxHxsvlYwRxbUO8Kz3D2lF1QmaLz5M04Q&loading=async&libraries=places&callback=initMap"></script>
</body>

</html>