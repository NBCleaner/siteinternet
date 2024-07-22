<?php ob_start(); ?>

<section class="hero nettoyageExterieur">
    <div class="headerContent">
        <h3>Nos prestations</h3>
        <h1>Nettoyage exterieur du véhicule</h1>
    </div>
</section>

<section class="section1">
        <div class="descriptionPrestation">
            <h2>RENDEZ A VOTRE VOITURE TOUT SON ECLAT AVEC LE NETTOYAGE EXTERIEUR !</h2>
            <p>
            Faire un nettoyage extérieur régulier de votre véhicule présente plusieurs avantages. 
            Non seulement cela protège la peinture contre les dommages et prolonge sa durée de vie, mais cela maintient également l'esthétique de votre voiture, 
            ce qui peut influencer sa valeur de revente. De plus, en inspectant votre véhicule pendant le nettoyage, 
            vous pouvez identifier et corriger rapidement les problèmes mineurs avant qu'ils ne deviennent plus graves. 
            Enfin, un nettoyage de votre véhicule contribue à améliorer la sécurité routière en assurant une meilleure visibilité 
            des phares et des feux, ce qui réduit les risques d'accident..
            </p>
        
        </div>
        <div class="containerjs">
            <div class="image-container">
                <img class="image-before slider-image" src="img/exterieur_volkswagen_avant.jpg" alt="Rendu avant travail">
                <img class="image-after slider-image" src="img/exterieur_volkswagen_apres.jpg" alt="Rendu après travail">
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
        POURQUOI NETTOYER L'EXTERIEUR DE VOTRE VEHICULE?
    </h2>
    <ul> 

        <li> Maintien de l'apparence esthétique </li>
        <li> Protection de la peinture </li>
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
$title = "Nettoyage exterieur";
$wrapperName = "wrapperPrestations";
require "../public/template.php";
?>