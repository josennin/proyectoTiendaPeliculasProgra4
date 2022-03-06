<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registrar producto</title>
	<link rel="shortcut icon" href="img/icon.ico"/>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		include_once 'registrarProdu.html';

		$nombre=$_FILES['archivo']['name'];
		$guardado=$_FILES['archivo']['tmp_name'];
		$nomn=$_REQUEST['nombre'];
		if(!file_exists('archivos')){
			mkdir('archivos',0777,true);
			if(file_exists('archivos')){
				if(move_uploaded_file($guardado, 'img/'.$nomn.".jpg")){
					echo "Archivo guardado con exito";
				}else{
					echo "Archivo no se pudo guardar";
				}
			}
		}else{
			if(move_uploaded_file($guardado, 'img/'.$nomn.".jpg")){
				echo "Imagen guardada con exito";
			}else{
				echo "Imagen no se pudo guardar";
			}
		}

		$nom=$_REQUEST['nom'];
		$pre=$_REQUEST['pre'];
		$ima=$_REQUEST['ima'];
		
		$category="pelicula";

		
      $conexion = mysqli_connect("localhost", "root", "", "tienda");

      if (mysqli_connect_errno()) {
          echo "Fallo al conectar BD";
        exit();
      }

      $consulta=mysqli_query($conexion, "insert into items(nombre,precio,imagen,categoria) values 
                       ('$nom','$pre','$ima','pelicula')")
      or die("Problemas en el insert " . mysqli_error($conexion));
      mysqli_close($conexion);

      echo "Articulo asignado."; 
	?>
</body>
</html>