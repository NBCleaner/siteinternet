<?php ob_start(); ?>

<section class="hero lustragePolissage">
    <div class="headerContent">
        <h3>Nos prestations</h3>
        <h1>Lustrage Pollisage</h1>
    </div>
</section>

<section class="section1">
        <div class="descriptionPrestation">
            <h2>RENDEZ A VOTRE VOITURE TOUT SON ECLAT AVEC LE LUSTRAGE !</h2>
            <p>
                Le lustrage ou polissage régulier de votre voiture est essentiel pour maintenir sa 
                peinture en bon état et lui donner un aspect neuf. Cette étape élimine les petites 
                imperfections, les rayures et les taches, tout en restaurant la brillance de la peinture. 
                En protégeant la carrosserie contre les dommages causés par les éléments extérieurs tels que les rayons UV 
                et la pollution, le lustrage contribue à préserver la valeur et l'esthétique de votre véhicule sur le long terme.
            </p>
            <p> 
                De plus, en améliorant l'apparence générale de la voiture, le lustrage peut également renforcer votre 
                fierté de propriétaire et vous offrir une expérience de conduite plus agréable.
            </p>
        </div>
        <div class="containerjs">
            <div class="image-container">
                <img class="image-before slider-image" src="img/lustageAvt.png" alt="Rendu avant travail">
                <img class="image-after slider-image" src="img/lustageAprs.png" alt="Rendu après travail">
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
        POURQUOI EFFECTUER UN LUSTRAGE SUR VOTRE VEHICULE?
    </h2>
    <ul>
        <li>Équivalent à une remise à neuf de votre carrosserie </li>
        <li>99% des micros rayures du véhicule éliminées</li>
        <li> Une vrai tenue dans le temps</li>
        <li> Une protection déperlante de plus d'un an</li>
    </ul>
    <p> 
        Prix : à partir de 10€.
    </p>
    <button> <a href="forfaits.php">VOIR NOS FORFAITS </a></button>

</section>

<script src="./js/prestation.js"></script>

<?php
$content = ob_get_clean();
$title = "Lustrage Polissage du véhicule";
$wrapperName = "wrapperPrestations";
require "../public/template.php";
?>