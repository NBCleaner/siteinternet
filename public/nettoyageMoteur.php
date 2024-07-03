<?php ob_start(); ?>

<section class="heroNettoyageMoteur">
    <div class="headerContent">
        <h3>Nos prestations</h3>
        <h1>Nettoyage moteur</h1>
    </div>
</section>

<section class="section1">
        <div class="descriptionPrestation">
            <h2>REDONNEZ DE LA PUISSANCE A VOTRE MOTEUR AVEC NOTRE SERVICE DE NETTOYAGE </h2>
            <p> 
                Nettoyer régulièrement le compartiment moteur de votre voiture présente plusieurs avantages significatifs. 
                Tout d'abord, cela empêche l'accumulation de saleté et de débris, réduisant ainsi les risques de surchauffe et de dysfonctionnement. 
                De plus, un compartiment moteur propre permet une détection précoce des fuites et des problèmes mécaniques,
                facilitant ainsi les réparations et les économies à long terme. 
                
            </p>
            <p> 
               En outre, en améliorant la dissipation de la chaleur et en préservant l'esthétique du véhicule, le lavage du compartiment moteur contribue
                à maintenir des performances optimales et la valeur de revente de la voiture. .
            </p>
        </div>
        <div class="containerjs">
            <div class="image-container">
                <img class="image-before slider-image" src="img/lavagemoteur.jpg" alt="Rendu avant travail">
                <img class="image-after slider-image" src="img/lavagemoteurApres.jpg" alt="Rendu après travail">
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
     A QUOI SERT LE NETTOYAGE DU MOTEUR?    
    </h2>
    <ul>
        <li> Prévention de l'accumulation de saleté et de débris </li>
        <li> Détection précoce de fuites et de problèmes mécaniques </li>
        <li> Amélioration de la dissipation de la chaleur </li>
        <li> Préservation de l'esthétique et de la valeur du véhicule </li>
    </ul>
    <p>
        Prix : à partir de 10€.
    </p>
    <button> <a href="forfaits.php">VOIR NOS FORFAITS </a></button>

</section>

<script src="./js/prestation.js"></script>

<?php
$content = ob_get_clean();
$title = "Nettoyage Moteur";
$wrapperName = "wrapperPrestations";
require "../template.php";
?>