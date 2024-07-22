<?php ob_start(); ?>

<section class="hero poseCeramique">
    <div class="headerContent">
        <h3>Nos prestations</h3>
        <h1>Pose céramique</h1>
    </div>
</section>

<section class="section1">
        <div class="descriptionPrestation">
            <h2>OPTEZ POUR LA PERFECTION AVEC NOTRE POSE DE CERAMIQUE </h2>
            <p> 
                La pose de céramique sur votre véhicule offre une protection durable contre les rayures, 
                les produits chimiques et les intempéries, préservant ainsi l'aspect neuf de la peinture. 
                De plus, elle facilite l'entretien en rendant le nettoyage plus facile et en réduisant l'adhérence des saletés.    
            </p>
            <p> 
                Ce traitement améliore également l'esthétique de la voiture en intensifiant la brillance 
                de la peinture et en la protégeant des éléments environnementaux. Enfin, en augmentant la valeur de revente 
                du véhicule, la pose de céramique représente un investissement rentable pour les propriétaires 
                soucieux de préserver l'aspect et la valeur de leur voiture.
            </p>
        </div>
        <div class="containerjs">
            <div class="image-containerCeramique">
                <img class="image-before2" src="img/ceramique-pc.png" alt="Rendu avant travail">
    
            </div>
            
        </div>
</section>



<section class="section2">
    <h2>
     POURQUOI EFFECTUER UNE POSE DE CERAMIQUE?    
    </h2>
    <ul>
        <li> Résistance aux intempéries </li>
        <li> Protection à long terme de la peinture </li>
        <li> Facilité d'entretien </li>
        <li> Aspect esthétique amélioré </li>
    </ul>
    <p>
        Prix :
        <ul>
            <li> 100€ pour la garantie de 1an. </li>
            <li> 200€ pour la garantie de 3ans. Comprend le lustrage et la décontamination. </li>
        </ul>
    </p>
    <button> <a href="forfaits.php">VOIR NOS FORFAITS </a></button>

</section>

<script src="./js/prestation.js"></script>

<?php
$content = ob_get_clean();
$title = "Traitement du cuir";
$wrapperName = "wrapperPrestations";
require "../public/template.php";
?>