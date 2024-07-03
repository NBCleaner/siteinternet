<?php ob_start(); ?>

<section class="heroNettoyageInterieur">
    <div class="headerContent">
        <h3>Nos prestations</h3>
        <h1>Nettoyage intérieur du véhicule</h1>
    </div>
</section>

<section class="section1">
        <div class="descriptionPrestation">
            <h2>RENDEZ A VOTRE VOITURE TOUT SON ECLAT AVEC LE NETTOYAGE INTERIEUR !</h2>
            <p>
                Nettoyer l'intérieur de votre véhicule est essentiel pour éliminer la poussière, 
                les allergènes et les bactéries, assurant ainsi un environnement sain et hygiénique.
                Un intérieur propre améliore le confort de conduite, préserve la valeur de votre voiture et 
                prolonge la durée de vie des matériaux. De plus, il contribue à la sécurité en 
                réduisant les distractions causées par des surfaces sales. Confier ce travail à 
                des professionnels garantit un nettoyage minutieux et de haute qualité.
            </p>
        
        </div>
        <div class="containerjs">
            <div class="image-container">
                <img class="image-before slider-image" src="img/nettoyageAvant.jpg" alt="Rendu avant travail">
                <img class="image-after slider-image" src="img/nettoyageApres.jpg" alt="Rendu après travail">
            </div>
            <div class="slider-line"></div>
            <div class="slider-button" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000000" viewBox="0 0 256 256">
                    <path
                        d="M136,40V216a8,8,0,0,1-16,0V40a8,8,0,0,1,16,0ZM96,120H35.31l18.35-18.34A8,8,0,0,0,42.34,90.34l-32,32a8,8,0,0,0,0,11.32l32,32a8,8,0,0,0,11.32-11.32L35.31,136H96a8,8,0,0,0,0-16Zm149.66,2.34-32-32a8,8,0,0,0-11.32,11.32L220.69,120H160a8,8,0,0,0,0,16h60.69l-18.35,18.34a8,8,0,0,0,11.32,11.32l32-32A8,8,0,0,0,245.66,122.34Z">
                    </path>
                </svg>
            </div>
            <input class="slider" type="range" min="0" max="100" value="50"
                aria-label="Percentage of photo before shown">
        </div>
</section>



<section class="section2">
    <h2>
        POURQUOI NETTOYER L'INTERIEUR DE VOTRE VEHICULE?
    </h2>
    <ul> 

        <li> Maintien de l'apparence esthétique </li>
        <li> Protection du cuir et du véhicule</li>
        <li> Préservation de la valeur du véhicule </li>
        
    </ul>
    <p> 
        Prix : selon forfait.
    </p>
    <button> <a href="forfaits.php">VOIR NOS FORFAITS </a></button>

</section>

<script src="./js/prestation.js"></script>

<?php
$content = ob_get_clean();
$title = "Nettoyage interieur";
$wrapperName = "wrapperPrestations";
require "../template.php";
?>