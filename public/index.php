<?php ob_start(); ?>

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
            <button onclick="location.href='../repertoireContact/contact.php';">
                <a href="../repertoireContact/contact.php">Contactez-nous !</a>
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
        <div class="lavage" onclick="location.href='nettoyageExterieur.php';" style="cursor: pointer;">
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
            <div class="lavagePc" onclick="location.href='nettoyageExterieur.php';" style="cursor: pointer;">
                <div>
                    <H3>NETTOYAGE EXTÉRIEUR</H3>
                </div>
            </div>
            <div class="nettoyageIntPc" onclick="location.href='nettoyageInterieur.php';" style="cursor: pointer;">
                <div>
                    <H3>NÉTTOYAGE INTÉRIEUR</H3>
                </div>
            </div>
            <div class="lustragePc" onclick="location.href='lustragePolissage.php';" style="cursor: pointer;">
                <div>
                    <h3>LUSTRAGE / POLISSAGE</h3>
                </div>
            </div>

            <div class="pharePc" onclick="location.href='optiqueDePhares.php';" style="cursor: pointer;">
                <div>
                    <H3>RÉNOVATION OPTIQUE DE PHARE</H3>
                    <a href=""></a>
                </div>
            </div>
            <div class="cuirPc" onclick="location.href='traitementCuir.php';" style="cursor: pointer;">
                <div>
                    <H3>TRAITEMENT CUIR</H3>
                    <a href=""></a>
                </div>
            </div>
            <div class="moteurPc" onclick="location.href='nettoyageMoteur.php';" style="cursor: pointer;">
                <div>
                    <H3>LAVAGE MOTEUR</H3>
                </div>
            </div>
            <div class="siegePc" onclick="location.href='shampoinageSiege.php';" style="cursor: pointer;">
                <div>
                    <H3>SHAMPOINGAGE SIÈGE</H3>
                </div>
            </div>
            <div class="ceramiquePc" onclick="location.href='poseCeramique.php';" style="cursor: pointer;">
                <div>
                    <H3>POSE CÉRAMIQUE</H3>
                </div>
            </div>
            <div class="deflocagePc" onclick="location.href='deflocageVehicule.php';" style="cursor: pointer;">
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
            <a href="forfaits.php">VOIR LES FORFAITS DELUXE</a>
        </button>
        <button class="btnTableauForfait">
            <a href="forfaits.php">VOIR TOUS LES FORFAITS</a>
        </button>
    </div>
</section>
<script src="js/accueil.js"></script>
<script src="js/carouselHero.js"></script>

<?php
$content = ob_get_clean();
$title = "Accueil";
$wrapperName = "wrapperAccueil";
require "./template.php";
?>