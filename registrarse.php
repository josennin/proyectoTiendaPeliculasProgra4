<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registrarse</title>
	<link rel="shortcut icon" href="img/icon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php 
	include_once 'registrarse.html'
		$usu=$_REQUEST['usu'];
		$pass=$_REQUEST['pass'];
		$nom=$_REQUEST['nom'];
				
      $conexion = mysqli_connect("localhost", "root", "", "tienda");

      if (mysqli_connect_errno()) {
          echo "Fallo al conectar BD";
        exit();
      }

      $consulta=mysqli_query($conexion, "insert into usuarios(usuario,contrasena) values 
                       ('$nom','$pass')")
      or die("Problemas en el insert " . mysqli_error($conexion));
      mysqli_close($conexion);

      echo "Bienvenido ".$nom." te has registrado!!!"; 
	?>
</body>
</html>