<?php 
    session_start();
    $usu=$_SESSION['username'];
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    
    .menss{
      color: red;
      font-size: 30px; 

    }
    .menss2{
      color: blue;
      font-size: 30px; 

    }
  </style>
</head>
<body>
  <?php
include_once 'carrito.php';
  $precio=0;
    $conexion = mysqli_connect("localhost", "root", "", "tienda");

      if (mysqli_connect_errno()) {
          echo "Fallo al conectar BD";
        exit();
      }

     ///$file = fopen('factura.txt', 'w');
$consulta = "SELECT * from carrito";
$result=mysqli_query($conexion,$consulta);
$ar=fopen("factura.txt","a") or
        die("Problemas en la creacion");
      fputs($ar,"**********************************************\n");
      fputs($ar,"*\t\tPeli-Paradice\n");
      fputs($ar,"*\t\tUsuario: ".$usu."\n");
while ($mostrar=mysqli_fetch_array($result)) {
      fputs($ar,"*\t Nombre de la pelicula: ".$mostrar['nombre']."\t\t\t\t\n");
      fputs($ar,"*\t Precio: ".$mostrar['precio']."\t\t\n");
      fputs($ar,"*\t Categoria: ".$mostrar['categoria']."\t\t\n");
      $precio=$precio+$mostrar['precio'];
      fputs($ar,"*\n");
   
}
fputs($ar,"*\t\tTotal a pagar: ".$precio."\t\t\n");
fputs($ar,"*************Fin de la Factura****************\n");
      fclose($ar);

      echo "<p class='menss'>Los datos se cargaron correctamente.</p>";
      echo "<a href='abrirFact.php' class='btn btn-primary'>Ver factura</a>";
      echo "<a href='deleteFact.php' class='btn btn-primary'>Eliminar factura</a>";
  ?>
</body>
</html>
