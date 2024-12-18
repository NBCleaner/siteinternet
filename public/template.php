<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
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
    <div class="<?= $wrapperName ?>">

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
                                    <li><a href="./nettoyageExterieur.php">Nettoyage Extérieur</a></li>
                                    <li><a href="./nettoyageInterieur.php">Nettoyage Intérieur</a></li>
                                    <li><a href="./traitementCuir.php">Traitement du cuir</a></li>
                                    <li><a href="./lustragePolissage.php">Lustrage / Polissage</a></li>
                                    <li><a href="./nettoyageMoteur.php">Nettoyage Moteur</a></li>
                                    <li><a href="./optiqueDePhares.php">Optiques de phare</a></li>
                                    <li><a href="./poseCeramique.php">Pose Céramique</a></li>
                                    <li><a href="./shampoinageSiege.php">Shampouinage des sièges</a></li>
                                    <li><a href="./deflocageVehicule.php">Déflocage</a></li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="./forfaits.php">Forfaits</a></li>
                    <li><a href="../repertoireContact/contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="socials">
                <a href="https://www.facebook.com/Nb.cleanerauto/"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.snapchat.com/add/nbcleaner_auto"><i class="fa-brands fa-square-snapchat"></i></a>
            </div>
        </header>

        <!-- CONTENU PRINCIPAL DE LA PAGE -->
        <?= $content ?>

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
                    <div><img src="./img/peugeot.svg" alt="logo peugeot"></div>
                    <div><img src="./img/mercedes.svg" alt="logo mercedes"></div>
                    <div><img src="./img/ds.svg" alt="logo dsautomobiles"></div>
                </div>
                <div class="ligne2">
                    <div><img src="./img/citroen.svg" alt="logo citroen"></div>
                    <div><img src="./img/toyota.svg" alt="logo toyota"></div>
                    <div><img class="arcelor" src="./img/arcelor mital.png" alt="logo arcelor mital"></div>
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
                    <ul><a href="./forfaits.php">Forfaits</a></ul>
                    <ul><a href="../repertoireContact/contact.php">Contact</a></ul>
                </ul>
            </div>
            <div>
                <p>Copyright 2024 | Tous droits réservés</p>
                <a href="./mentions_legal.php">Mentions légales</a> - <a href="./privacity_policy.php">Politique de confidentialité</a>
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
    <script src="./js/template.js"></script>
    <script src="./js/style.js"></script>
    <script src="./js/avis.js"></script>
    <script src="./js/burgerMenu.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxHxsvlYwRxbUO8Kz3D2lF1QmaLz5M04Q&loading=async&libraries=places&callback=initMap"></script>
</body>

</html>