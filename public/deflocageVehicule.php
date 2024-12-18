<?php ob_start(); ?>

<section class="hero deflocageVehicule">
    <div class="headerContent">
        <h3>Nos prestations</h3>
        <h1>Deflocage véhicule</h1>
    </div>
</section>

<section class="section1">
        <div class="descriptionPrestation">
            <h2>LIBEREZ VOTRE VEHICULE EN UN CLIN D'OEIL </h2>
            <p>
            Défloquer votre véhicule offre plusieurs avantages. Cela améliore l'esthétique en redonnant une apparence propre et professionnelle, ce qui peut augmenter sa valeur lors de la revente. De plus, le déflocage facilite la personnalisation en permettant de changer facilement de design ou de branding. Il protège également la peinture en évitant les résidus adhésifs et les différences de couleur dues à l'exposition au soleil. Opter pour un service de déflocage professionnel garantit un résultat optimal.
            </p>
        
        </div>
        <div class="containerjs">
            <div class="image-container">
                <img class="image-before slider-image" src="img/flocagAvt.jpeg" alt="Rendu avant travail">
                <img class="image-after slider-image" src="img/flocageAprs.jpeg" alt="Rendu après travail">
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
        POURQUOI EFFECTUER UN DEFLOCAGE?
    </h2>
    <ul> 
        <li> Liberté d'utilisation </li>
        <li> Possibilité de personnaliser votre véhicule selon vos besoins et préférences </li>
        <li> Maximisation de la valeur à la revente </li>
        <li>Plus grande flexibilité dans la gestion de votre budget automobile </li>
        <li> Prise de contrôle totale de votre mobilité </li>
        
    </ul>
    <p> 
        PRIX SUR DEVIS.
    </p>
    <button> <a href="contact.php">CONTACTEZ-NOUS !  </a></button>

</section>

<script src="./js/prestation.js"></script>

<?php
$content = ob_get_clean();
$title = "Deflocage Vehicule";
$wrapperName = "wrapperPrestations";
require "../public/template.php";
?>