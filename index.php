<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

    <link rel="icon" href="./favicon-32x32.png" type="image/x-icon">
    <link rel="icon" href="./favicon-32x32.png" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon-32x32.png">
    <link rel="icon" sizes="192x192" href="./favicon-32x32.png">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="mask-icon" href="./favicon-32x32.png">
</head>

<body>

    <!-- HEADER -->
    <header id="scrollNav">
        <img src="../siteinternet/public/img/logo.svg" alt="Logo de l'entreprise NBCleaner" onclick="window.location.href='../siteinternet/index.php';" style="cursor: pointer;">

        <div id="burger-icon">

        </div>
        <nav>
            <ul>
                <li><a href="../siteinternet/index.php">Accueil</a></li>
                <li>
                    <div class="dropdownPrestations">
                        <button id="dropdownPrestationsButton">Prestations</button>
                        <div id="dropdownPrestationsContent" class="dropdownContent">
                            <ul>
                                <li><a href="../siteinternet/public/nettoyageExterieur.php">Nettoyage Extérieur</a></li>
                                <li><a href="../siteinternet/public/nettoyageInterieur.php">Nettoyage Intérieur</a></li>
                                <li><a href="../siteinternet/public/traitementCuir.php">Traitement du cuir</a></li>
                                <li><a href="../siteinternet/public/lustragePolissage.php">Lustrage / Polissage</a></li>
                                <li><a href="../siteinternet/public/nettoyageMoteur.php">Nettoyage Moteur</a></li>
                                <li><a href="../siteinternet/public/optiqueDePhares.php">Optiques de phare</a></li>
                                <li><a href="../siteinternet/public/poseCeramique.php">Pose Céramique</a></li>
                                <li><a href="../siteinternet/public/shampoinageSiege.php">Shampouinage des sièges</a></li>
                                <li><a href="../siteinternet/public/deflocageVehicule.php">Déflocage</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="../public/forfaits.php">Forfaits</a></li>
                <li><a href="../siteinternet/repertoireContact/contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="socials">
            <!-- Mettre les liens vers les réseaux de NBCleaner -->
            <a href="https://www.facebook.com/Nb.cleanerauto/"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://www.snapchat.com/add/nbcleaner_auto"><i class="fa-brands fa-square-snapchat"></i></a>
        </div>
    </header>

    <section class="hero">
        <div class="carouselHero">
            <div class="carousel-indicators">
                <span class="indicator active" data-slide="0" onclick="showSlide(0)"></span>
                <span class="indicator" data-slide="1" onclick="showSlide(1)"></span>
                <span class="indicator" data-slide="2" onclick="showSlide(2)"></span>
            </div>
        </div>
        <div class="heroContent">
            <h1>NB CLEANER Auto</h2>
                <p>
                    Respectueux de l'environnement et des techniques de lavage
                    éco-responsables. Nous offrons un service de qualité exceptionnelle.
                </p>
                <button onclick="location.href='repertoireContact/contact.php';">
                    <a href="repertoireContact/contact.php">Contactez-nous !</a>
                </button>
        </div>
    </section>



    <article>
        <div class="histoire">
            <h2>Votre centre de lavage
                et nettoyage
                sur coudekerque-Branche</h2>
            <p>VOTRE CENTRE DE LAVAGE ET NETTOYAGE À COUDEKERQUE-BRANCHE
                Bienvenue chez NB CLEANER, votre partenaire de confiance pour un lavage automobile de qualité exceptionnelle à Coudekerque-Branche ! Nous nous engageons à offrir à nos clients un service de lavage automobile de qualité supérieure, combinant expertise technique et souci du détail. Située au cœur de Coudekerque-Branche, notre équipe passionnée est déterminée à redonner à votre véhicule tout son éclat et sa brillance, à chaque visite.<br>
                Respectueux de l'environnement et des techniques de lavage éco-responsables, notre eau est récupérée puis traitée via une cuve par des professionnels.
            </p>
        </div>
        <div class="video">
            <iframe src="https://www.youtube.com/embed/1Imrw2kagXI?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </article>

    <section class="prestations">
        <div class="devis">
            <h2>
                PRESTATIONS
            </h2>
            <p>
                Devis gratuit en - de 5 minutes en centre
            </p>
        </div>
        <div class="container-prestations">
            <div class="lavage" onclick="location.href='../public/nettoyageExterieur.php';" style="cursor: pointer;">
                <div>
                    <H3>NETTOYAGE EXTÉRIEUR</H3>
                </div>
            </div>
            <div class="nettoyageInt" onclick="location.href='nettoyageInterieur.php';" style="cursor: pointer;">
                <div>
                    <H3>NETTOYAGE INTÉRIEUR</H3>
                </div>
            </div>
            <div class="lustrage" onclick="location.href='lustragePolissage.php';" style="cursor: pointer;">
                <div>
                    <H3>LUSTRAGE / POLISSAGE</H3>
                </div>
            </div>
            <div class="phare" onclick="location.href='optiqueDePhares.php';" style="cursor: pointer;">
                <div>
                    <H3>RÉNOVATION OPTIQUE DE PHARE</H3>
                </div>
            </div>
            <div class="cuir" onclick="location.href='traitementCuir.php';" style="cursor: pointer;">
                <div>
                    <H3>TRAITEMENT CUIR</H3>
                </div>
            </div>
            <div class="moteur" onclick="location.href='nettoyageMoteur.php';" style="cursor: pointer;">
                <div>
                    <H3>LAVAGE MOTEUR</H3>
                </div>
            </div>
            <div class="siege" onclick="location.href='shampoinageSiege.php';" style="cursor: pointer;">
                <div>
                    <H3>SHAMPOINGAGE SIÈGE</H3>
                </div>
            </div>
            <div class="ceramique" onclick="location.href='poseCeramique.php';" style="cursor: pointer;">
                <div>
                    <H3>POSE CÉRAMIQUE</H3>
                </div>
            </div>
            <div class="deflocage" onclick="location.href='deflocageVehicule.php';" style="cursor: pointer;">
                <div>
                    <H3>DÉFLOCAGE</H3>
                </div>
            </div>
        </div>
    </section>

    <section class="prestationsPc">
        <div class="devisPc">
            <h2>
                PRESTATIONS
            </h2>
            <p>
                Devis gratuit en - de 5 minutes en centre
            </p>
        </div>
        <div class="carousel-container-pc">
            <i class="fa-solid fa-circle-arrow-left carousel-arrow left-arrow" id="left-arrow-top"></i>
            <div class="container-prestationsPc">
                <div class="lavagePc" onclick="location.href='./public/nettoyageExterieur.php';" style="cursor: pointer;">
                    <div>
                        <H3>NETTOYAGE EXTÉRIEUR</H3>
                    </div>
                </div>
                <div class="nettoyageIntPc" onclick="location.href='./public/nettoyageInterieur.php';" style="cursor: pointer;">
                    <div>
                        <H3>NÉTTOYAGE INTÉRIEUR</H3>
                    </div>
                </div>
                <div class="lustragePc" onclick="location.href='./public/lustragePolissage.php';" style="cursor: pointer;">
                    <div>
                        <h3>LUSTRAGE / POLISSAGE</h3>
                    </div>
                </div>

                <div class="pharePc" onclick="location.href='./public/optiqueDePhares.php';" style="cursor: pointer;">
                    <div>
                        <H3>RÉNOVATION OPTIQUE DE PHARE</H3>
                        <a href=""></a>
                    </div>
                </div>
                <div class="cuirPc" onclick="location.href='./public/traitementCuir.php';" style="cursor: pointer;">
                    <div>
                        <H3>TRAITEMENT CUIR</H3>
                        <a href=""></a>
                    </div>
                </div>
                <div class="moteurPc" onclick="location.href='./public/nettoyageMoteur.php';" style="cursor: pointer;">
                    <div>
                        <H3>LAVAGE MOTEUR</H3>
                    </div>
                </div>
                <div class="siegePc" onclick="location.href='./public/shampoinageSiege.php';" style="cursor: pointer;">
                    <div>
                        <H3>SHAMPOINGAGE SIÈGE</H3>
                    </div>
                </div>
                <div class="ceramiquePc" onclick="location.href='./public/poseCeramique.php';" style="cursor: pointer;">
                    <div>
                        <H3>POSE CÉRAMIQUE</H3>
                    </div>
                </div>
                <div class="deflocagePc" onclick="location.href='../siteinternet/public/deflocageVehicule.php';" style="cursor: pointer;">
                    <div>
                        <H3>DÉFLOCAGE</H3>
                    </div>
                </div>
                <i class="fa-solid fa-circle-arrow-right carousel-arrow right-arrow" id="right-arrow-top"></i>
            </div>
    </section>

    <div class="wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 176" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-495.387 75.5702H-606C-551.711 86.3857 -441.099 125.785 -332.522 125.785C-223.944 125.785 47.4982 97.9738 156.075 64.7547C264.652 31.5356 373.229 -13.2715 481.806 3.72428C590.383 19.9476 698.961 97.9738 807.538 131.193C916.115 165.184 1024.69 153.596 1133.27 125.785C1241.85 97.9738 1350.42 53.9392 1404.71 31.5356L1459 9.13204V176H1404.71C1350.42 176 1241.85 176 1133.27 176C1024.69 176 916.115 176 807.538 176C698.961 176 590.383 176 481.806 176C373.229 176 264.652 176 156.075 176C47.4982 176 -61.0789 176 -169.656 176C-278.233 176 -386.81 176 -441.099 176H-495.387V75.5702Z" fill="#EEF1F9" />
        </svg>
    </div>


    <section class="forfait">
        <div class="forfaitDevis">
            <h2>
                NOS FORFAITS
            </h2>
            <p>
                *Tous les lavages se font sur devis
            </p>
            <div class="btn-express-deluxe">
                <div id="express">EXPRESS</div>
                <div id="deluxe">DELUXE</div>
            </div>
        </div>
        <div class="container-forfait">
            <div class="globalForfait1">
                <div class="forfait1">
                    <h3>INTÉRIEUR + ÉXTERIEUR</h3>
                </div>
                <div class="listeforfait1">
                    <h4>À PARTIR DE 50€*</h4>
                    <UL>
                        <li><i class="fa-solid fa-circle-check"></i> Aspiration habitacle</li>
                        <li><i class="fa-solid fa-circle-check"></i> Nettoyage entre portes</li>
                        <li><i class="fa-solid fa-circle-check"></i> Prélavage à la main</li>
                        <li><i class="fa-solid fa-circle-check"></i> Vitres intérieures</li>
                        <li><i class="fa-solid fa-circle-check"></i> Vitres extérieures</li>
                        <li><i class="fa-solid fa-circle-check"></i> Nettoyage / rénovateur plastique</li>
                        <li><i class="fa-solid fa-circle-check"></i> Dressing des pneus</li>
                        <li><i class="fa-solid fa-circle-check"></i> Jantes</li>

                        <li class="extra-deluxe"><i class="fa-solid fa-circle-check"></i> Vitres extérieures</li>
                        <li class="extra-deluxe"><i class="fa-solid fa-circle-check"></i> Dressing des pneus</li>
                        <li class="extra-deluxe"><i class="fa-solid fa-circle-check"></i> Lustrage à la main </li>

                    </UL>
                </div>
            </div>
            <div class="globalForfait2">
                <div class="forfait2">
                    <h3>INTÉRIEUR</h3>
                </div>
                <div class="listeforfait2">
                    <h4>À PARTIR DE 40€*</h4>
                    <ul>
                        <li><i class="fa-solid fa-circle-check"></i> Aspiration habitacle</li>
                        <li><i class="fa-solid fa-circle-check"></i> Nettoyage entre portes</li>
                        <li><i class="fa-solid fa-circle-check"></i> Vitres intérieures</li>
                        <li><i class="fa-solid fa-circle-check"></i> Nettoyage / rénovateur plastique</li>

                        <li class="extra-deluxe"><i class="fa-solid fa-circle-check"></i> Shampoinage sièges moquettes / tapis</li>
                        <li class="extra-deluxe"><i class="fa-solid fa-circle-check"></i> Nettoyage du cuir</li>
                    </ul>
                </div>
            </div>
            <div class="globalForfait3">
                <div class="forfait3">
                    <h3>EXTÉRIEUR</h3>
                </div>
                <div class="listeforfait3">
                    <h4>À PARTIR DE 20€*</h4>
                    <ul>
                        <li><i class="fa-solid fa-circle-check"></i> Prélavage à la main</li>
                        <li><i class="fa-solid fa-circle-check"></i> Vitres extérieures</li>
                        <li><i class="fa-solid fa-circle-check"></i> Dressing des pneus</li>
                        <li><i class="fa-solid fa-circle-check"></i> Jantes</li>

                        <li class="extra-deluxe"><i class="fa-solid fa-circle-check"></i> Lustrage à la main</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="bouttonAllForfait">
            <button class="btnForfaitDeluxe">
                <a href="../siteinternet/public/forfaits.php">VOIR LES FORFAITS DELUXE</a>
            </button>
            <button class="btnTableauForfait">
                <a href="../siteinternet/public/forfaits.php">VOIR TOUS LES FORFAITS</a>
            </button>
        </div>
    </section>

    <!-- QUESTION -->
    <section class="question">
        <div>
            <p>Une question ?</p>
            <button class="buttonQuestion">
                <a href="../siteinternet/repertoireContact/contact.php">Contactez-nous !</a>
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
                <div><img src="../siteinternet/public/img/peugeot.svg" alt="logo peugeot"></div>
                <div><img src="../siteinternet/public/img/mercedes.svg" alt="logo mercedes"></div>
                <div><img src="../siteinternet/public/img/ds.svg" alt="logo dsautomobiles"></div>
            </div>
            <div class="ligne2">
                <div><img src="../siteinternet/public/img/citroen.svg" alt="logo citroen"></div>
                <div><img src="../siteinternet/public/img/toyota.svg" alt="logo toyota"></div>
                <div><img class="arcelor" src="../siteinternet/public/img/arcelor mital.png" alt="logo arcelor mital"></div>
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
                <ul><a href="../siteinternet/index.php">Accueil</a></ul>
                <ul><a href="../siteinternet/public/forfaits.php">Forfaits</a></ul>
                <ul><a href="../siteinternet/repertoireContact/contact.php">Contact</a></ul>
            </ul>
        </div>
        <div>
            <p>Copyright 2024 | Tous droits réservés</p>
            <a href="../siteinternet/public/mentions_legal.php">Mentions légales</a> - <a href="../siteinternet/public/privacity_policy.php">Politique de confidentialité</a>
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

    <script src="./public/js/accueil.js"></script>
    <script src="./public/js/carouselHero.js"></script>
    <script src="https://kit.fontawesome.com/e33af3981e.js" crossorigin="anonymous"></script>
    <script src="../siteinternet/public/js/template.js"></script>
    <script src="../siteinternet/public/js/style.js"></script>
    <script src="../siteinternet/public/js/avis.js"></script>
    <script src="../siteinternet/public/js/burgerMenu.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxHxsvlYwRxbUO8Kz3D2lF1QmaLz5M04Q&loading=async&libraries=places&callback=initMap"></script>
</body>

</html>