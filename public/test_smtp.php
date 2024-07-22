<?php
$host = 'smtp.ionos.fr'; 
$port = 465; 

$connection = @fsockopen($host, $port, $errno, $errstr, 10);

if ($connection) {
    echo "Connexion réussie à $host sur le port $port";
    fclose($connection);
} else {
    echo "Échec de la connexion à $host sur le port $port : $errstr ($errno)";
}
?>
