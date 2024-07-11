<?php ob_start(); ?>

<section class="hero shampoinageSiege">
    <div class="headerContent">
        <h3>Nos prestations</h3>
        <h1>Shampoinage siège</h1>
    </div>
</section>

<section class="section1">
        <div class="descriptionPrestation">
            <h2>UNE VOITURE COMME NEUVE AVEC LE SHAMPOINAGE DES SIEGES ! </h2>
            <p>
                Faire laver et shampouiner les sièges de votre voiture présente plusieurs avantages significatifs. 
                Tout d'abord, cela élimine efficacement les taches et les odeurs, assurant ainsi un intérieur propre et frais.
                En plus d'améliorer l'hygiène et la propreté de l'habitacle, ce processus rafraîchit également l'apparence intérieure de votre véhicule, 
                ce qui peut contribuer à une expérience de conduite plus agréable. 
            </p>
            <p> 
                En préservant la durabilité des sièges, cela aide à éviter une usure prématurée des fibres et à maintenir la valeur de 
                revente du véhicule en témoignant de son entretien régulier et de son bon état général.
            </p>
        </div>
        <div class="containerjs">
            <div class="image-container">
                <img class="image-before slider-image" src="img/shampoinageAvant.jpeg" alt="Rendu avant travail">
                <img class="image-after slider-image" src="img/shampoinageApres.jpeg" alt="Rendu après travail">
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
     POURQUOI EFFECTUER UN SHAMPOINAGE DES SIEGES?    
    </h2>
    <ul>
        <li> Élimination des taches et des odeurs </li>
        <li> Préservation de la durabilité des sièges</li>
        <li> Préservation de la durabilité des sièges </li>
        <li> Maintien de la valeur du véhicule </li>
    </ul>
    <p> 
        Prix : à partir de 10€ /siège.
    </p>
    <button> <a href="forfaits.php">VOIR NOS FORFAITS </a></button>

</section>

<script src="./js/prestation.js"></script>

<?php
$content = ob_get_clean();
$title = "Shampoinage des sièges";
$wrapperName = "wrapperPrestations";
require "./template.php";
?>