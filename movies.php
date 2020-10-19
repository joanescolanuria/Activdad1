<?php
	
if(isset($_GET['nombre']) && isset($_GET['actor']) && isset($_GET['annio'])) 
{  
    $nombre = $_GET['nombre'];
    $actor = $_GET['actor'];
    $annio = $_GET['annio'];
	
	echo "<h1><p>Información sobre la película</p></h1>";
	echo "La película es: " . $nombre . " y su nombre del Actor es: ". $actor . " y se va a producir en el año: " . $annio;
}

?>