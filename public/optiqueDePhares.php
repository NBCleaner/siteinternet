<?php ob_start(); ?>

<section class="hero optiquePhare">
    <div class="headerContent">
        <h3>Nos prestations</h3>
        <h1>Rénovation des Optiques de phares</h1>
    </div>
</section>

<section class="section1">
        <div class="descriptionPrestation">
            <h2>RENDEZ A VOTRE VOITURE TOUT SON ECLAT AVEC LA RENOVATION DES OPTIQUES DE PHARES !</h2>
            <p>
                Rénover les optiques de phares de votre voiture est crucial pour garantir une visibilité optimale et 
                renforcer la sécurité sur la route, en éliminant les imperfections qui peuvent réduire l'efficacité de l'éclairage.
                De plus, cette rénovation contribue à améliorer l'esthétique générale de votre véhicule en lui donnant 
                un aspect plus moderne et bien entretenu tout en assurant une conformité continue aux normes de sécurité routière.
            </p>
        
        </div>
        <div class="containerjs">
            <div class="image-container">
                <img class="image-before slider-image" src="img/optiquePhareAvant.jpg" alt="Rendu avant travail">
                <img class="image-after slider-image" src="img/optiquePhrareApres.jpg" alt="Rendu après travail">
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
        POURQUOI PROCEDER A LA RENOVATION DES OPTIQUES DE PHARES
    </h2>
    <ul>
        <li>Amélioration de la visibilité et de la sécurité</li>
        <li> Conformité aux normes de sécurité routière </li>
        <li> Préservation de la durabilité des phares </li>
        
    </ul>
    <p> 
        Prix : 40€ les deux phares.
    </p>
    <button> <a href="forfaits.php">VOIR NOS FORFAITS </a></button>

</section>

<script src="./js/prestation.js"></script>

<?php
$content = ob_get_clean();
$title = "Traitement du cuir";
$wrapperName = "wrapperPrestations";
require "./template.php";
?>