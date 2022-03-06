<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modificar contraseña</title>
	<link rel="shortcut icon" href="img/icon.ico"/>
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    	body{
            background-image: url(http://www.cedricat.cat/pics/b/6/66901_movie-background-images.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100%;
        }
		.nac{
			background-color: rgb(54, 126, 153);
		}
        .mess{
            text-align: center;
            padding: 10%;
            width: 110%;
            height: 100%;
            background-color: rgb(104, 54, 153,0.4);
            color: rgb(54, 153, 54);
            font-size: 25px;
        }
        .menss{
             position: center;
             color: rgb(54, 153, 54);
            font-size: 25px;
            margin-left: 10%;

        }
    </style>
</head>
<body>
	<nav class="nac">
        <ul>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
            <li>
            	<img src="https://cdn.pixabay.com/photo/2016/06/15/08/23/tape-1458416_960_720.png" style="width: 110px; height: 50px; margin-right: 10%;"><br>
            	<a href="main.php" style="color: white;">Peli-Paradise</a>
            </li>
        </ul>
        
    </nav>
	<div class="container">
        <div class="row">
            <div class="mess">
                <?php
    $conexion = mysqli_connect("localhost", "root", "", "tienda") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update usuarios
                          set contrasena='$_REQUEST[contraActual]' 
                        where contrasena='$_REQUEST[contraAnterior]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "<p class='menss'>La contraseña fue actualizada</p>";
    ?>
    <a href="main.php" class="btn btn-info">Inicio</a>
            </div>

        </div>
    </div>
    
    
</body>
</html>