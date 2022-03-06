<?php
include_once 'facturaTXT.php';
	unlink('factura.txt');
	$nombre_fichero = 'factura.txt';

	if (file_exists($nombre_fichero)) {
    	echo "<p class='menss'>No se pudo eliminar el fichero</p>";
	} else {
    	echo "<p class='menss2'>Se elimino correctamente el fichero</p>";
	}
?>