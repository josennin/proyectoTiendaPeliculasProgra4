<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agregar al Carrito</title>
	<link rel="shortcut icon" href="img/icon.ico"/>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		include_once 'main.php';
		$nom=$_REQUEST['nom'];
		$pre=$_REQUEST['prec'];
		$ima=$_REQUEST['ima'];
		
				
      $conexion = mysqli_connect("localhost", "root", "", "tienda");

      if (mysqli_connect_errno()) {
          echo "Fallo al conectar BD";
        exit();
      }

      $consulta=mysqli_query($conexion, "insert into carrito(nombre,precio,imagen,categoria) values 
                       ('$nom','$pre','$ima','pelicula')")
      or die("Problemas en el insert " . mysqli_error($conexion));
     
      mysqli_close($conexion);

      echo "Articulo ".$nom." asignado al carrito."; 
      ?>
</body>
</html>