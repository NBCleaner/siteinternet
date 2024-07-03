<?php ob_start(); ?>

<section class="hero traitementCuir">
    <div class="headerContent">
        <h3>Nos prestations</h3>
        <h1>Traitement du cuir</h1>
    </div>
</section>

<section class="section1">
        <div class="descriptionPrestation">
            <h2>RAJEUNISSEZ VOTRE CUIR ET RAVIVEZ SON ECLAT !</h2>
            <p>
                Faire un traitement sur le cuir de votre voiture est essentiel pour assurer leur protection, leur
                durabilité et leur esthétique. Ce traitement préserve l'aspect neuf du cuir tout en le protégeant contre
                l'usure, les dommages et la décoloration.
            </p>
            <p>
                De plus, il sera plus faciles à nettoyer et à entretenir, ce qui permet de maintenir un intérieur propre
                avec moins d'effort. Enfin, il contribue également à réduire l'absorption des odeurs indésirables,
                assurant ainsi une atmosphère fraîche et agréable à l'intérieur de la voiture.
            </p>
        </div>
        <div class="containerjs">
            <div class="image-container">
                <img class="image-before slider-image" src="img/lustrageavant.jpeg" alt="Rendu avant travail">
                <img class="image-after slider-image" src="img/lustrageapres.jpeg" alt="Rendu après travail">
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
        POURQUOI EFFECTUER UN TRAITEMENT CUIR POUR VOTRE VEHICULE?
    </h2>
    <ul>
        <li>Protection contre l'usure et les dégâts</li>
        <li>Facilité d'entretien </li>
        <li> Réduction des odeurs indésirables</li>
        <li> Maintien de l'apparence esthétique </li>
    </ul>
    <p> 
        Prix : à partir de 10€ par siège.
    </p>
        <button> <a href="forfaits.php"> VOIR NOS FORFAITS </a></button>

</section>

<script src="./js/prestation.js"></script>

<?php
$content = ob_get_clean();
$title = "Traitement du cuir";
$wrapperName = "wrapperPrestations";
require "../template.php";
?>