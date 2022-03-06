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
        .form{
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
            <div class="form">
                <?php
                $usua=$_REQUEST["usu"];
                $contra=$_REQUEST["contra"];
            $conexion = mysqli_connect("localhost", "root", "", "tienda") or
            die("Problemas con la conexión");

            $select=$conexion->prepare('SELECT * FROM USUARIOS WHERE usuario=$usua AND contrasena=$contra');
                 
                
            

       
           

        $registros = mysqli_query($conexion, "select * from usuarios
                        where contrasena='$_REQUEST[contra]'") or
            die("Problemas en el select:" . mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="cambiaContra3.php" method="post">
      Ingrese nueva contraseña:
      <input type="text" name="contraActual" value="<?php echo $reg['contrasena'] ?>">
      <br>
      <input type="hidden" name="contraAnterior" value="<?php echo $reg['contrasena'] ?>">
      <input id="bot" class="btn btn-success" type="submit" value="Modificar">
    </form>

  <?php
    }else
        echo "<p class='menss'>Contraseña invalida</p>";
        
  ?>
            </div>
        </div>
    </div>
    
</body>
</html>