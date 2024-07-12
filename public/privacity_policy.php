<?php


ob_start();

?>
<div class="navDecoration"></div>

<h1>Politique de Confidentialité</h1>

<main>
   
    <p>Politique de Confidentialité<br><br>

        Nous prenons la confidentialité de vos données très au sérieux. Voici comment nous collectons, utilisons et protégeons vos informations personnelles.
    </p><br>

    <p>Données collectées<br><br>

        Les données que nous collectons via notre formulaire de contact incluent : nom, prénom, adresse email, téléphone et votre message.
    </p><br>

    <p>Utilisation des données<br><br>
        
        Ces informations sont utilisées uniquement pour répondre à vos demandes ou questions.
    </p><br>

    <p>Destinataire des données<br><br>

        Les données sont envoyées directement dans la boîte mail de "NB CLEANER AUTO" et ne sont pas stockées sur un serveur.
    </p><br>

    <p>Durée de conservation<br><br>

        Les données seront conservées aussi longtemps que nécessaire pour répondre à votre demande.
    </p><br>

    <p>Vos droits<br><br>

      Vous avez le droit d'accéder, de rectifier, de supprimer ou de limiter le traitement de vos données personnelles. Pour exercer ces droits, veuillez nous contacter à l'adresse email suivante : Nbcleaner.auto@gmail.com .
    </p><br>

</main>


<?php
$content = ob_get_clean();
$title = "Politique de Confidentialité";
$wrapperName = "wrapperPrivacityPolicy";
require "template.php";
?>