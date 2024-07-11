<?php
$host = 'smtp.ionos.fr'; // Remplacez par votre hôte SMTP
$port = 465; // Remplacez par le port SMTP approprié (465 ou 587)

$connection = @fsockopen($host, $port, $errno, $errstr, 10);

if ($connection) {
    echo "Connexion réussie à $host sur le port $port";
    fclose($connection);
} else {
    echo "Échec de la connexion à $host sur le port $port : $errstr ($errno)";
}
?>
