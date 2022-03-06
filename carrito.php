<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Carrito</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" href="img/icon.ico"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		body{
            background-image: url(http://www.cedricat.cat/pics/b/6/66901_movie-background-images.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100%;
        }
		#im{
			width: 60px;
			height: 60px;
		}
		.in{
			font-family: 'FontAwesome', fas fa-trash-alt; 
		}
		.carrito{
			width: 70%;
            height: 50%;
            margin-left: 3%;
            color: rgb(196, 41, 41);
            font-size: 25px; 
		}
		.nac{
			background-color: rgb(54, 126, 153);
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
            	<a href="main.php">Peli-Paradise</a>
            </li>
        </ul>
        
    </nav>
	<div class="container">
		<div class="row">
			<div class="carrito">
				<div class="table-responsive text-nowrap">
	<table style="color: rgb(54, 126, 153)" class="table table-striped">
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Cover</td>
			<td>Categoria</td>
		</tr>

	<?php 
					
      $conexion = mysqli_connect("localhost", "root", "", "tienda");

      if (mysqli_connect_errno()) {
          echo "Fallo al conectar BD";
        exit();
      }

      $consulta="SELECT * from carrito";
      $result=mysqli_query($conexion,$consulta);
     
     while ($mostrar=mysqli_fetch_array($result)) {
              
	 ?>
	 <tr>
	 	<form action="eliminarArt.php">
	 	<td><?php echo $mostrar['id']; ?> <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>"></td>

	 	<td><?php echo $mostrar['nombre']; ?><input type="hidden" name="nom" value="<?php echo $mostrar['nombre']; ?>"></td>

	 	<td><?php echo $mostrar['precio']; ?><input type="hidden" name="pre" value="<?php echo $mostrar['precio']; ?>"></td>

	 	<td><img id="im" src="img/<?php echo $mostrar['imagen']; ?>"></td>

	 	<td><?php echo $mostrar['categoria']; ?><input type="hidden" name="cat" value="<?php echo $mostrar['categoria']; ?>"></td>

	 	<td>
			<button type="submit"><i class="fas fa-trash-alt"></i></button>
	 	</td>
	 	</form>
	 </tr>
	 <?php 
	  }
	  ?>
	  	</table>

	  	</div>
	  	<a href="main.php" class="btn btn-primary">Inicio</a>
	  	<a href="facturaTXT.php" class="btn btn-primary">Procesar Compra</a>
			</div>
		</div>
	</div>
	
</body>
</html>