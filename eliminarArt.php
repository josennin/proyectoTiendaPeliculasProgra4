<?php 
	include_once 'carrito.php';
	$id=$_REQUEST['id'];
	$nom=$_REQUEST['nom'];
	$conexion = mysqli_connect("localhost", "root", "", "tienda");

      if (mysqli_connect_errno()) {
          echo "Fallo al conectar BD";
        exit();
      }
/*
      $consulta="DELETE FROM carrito WHERE id='$mostrar[id]'";
      $result=mysqli_query($conexion,$consulta);
      $mostrar=mysqli_fetch_array($result);

      
      
      if ($result) {
      	echo "El articulo se elimino correctamente";
      }else{
      	echo "No se pudo eliminar el articulo";
      }
*/

      $registros = mysqli_query($conexion, "select id from carrito
                        where nombre='$nom'") or
    die("Problemas en el select: " . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from carrito where nombre='$nom'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se elimino el articulo.";
    header("location: carrito.php");
  } else {
    echo "No existe.";
  }
    mysqli_close($conexion);
?>