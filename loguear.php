<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    .inc{
      color: red;
            font-size: 30px;
    }
  </style>
</head>
<body>
  <?php 
  //session_start();
  include_once 'index.php';
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tienda";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  echo "error";
} else{
 // echo "Connected successfully!!";
}

$usuario = $_REQUEST["username"];

$sql = "select * from usuarios where usuario='$usuario'";

$result = $conn->query($sql);
if ($result->num_rows > 0 ) { 
  $usuarioGuardado = mysqli_fetch_array($result);
} else {
    echo "0 results";
}

$conn->close();

if ($_REQUEST["password"]==$usuarioGuardado["contrasena"]) {
   header("location: main.php");
    $_SESSION['username']=$usuario;
}
else{
  //header("location: index.php");
  echo "<p class='inc'>Contraseña incorrecta</p>";
}






  /*
  //include_once 'index.php';
  $usuario=$_POST['username'];
  $pass=$_POST['password'];
  

  $conexion = mysqli_connect("localhost", "root", "", "tienda");

      if (mysqli_connect_errno()) {
          echo "Fallo al conectar BD";
        exit();
      }

      //$q="SELECT COUNT(*) from usuarios WHERE usuario='$usuario' and contraseña='$pass'";
      //$consulta=mysqli_query($conexion,$q);
      
        $consulta=mysqli_query($conexion, "SELECT COUNT(*) from usuarios WHERE usuario='$usuario' and contraseña='$pass'")
        //$row_cnt = mysqli_num_rows($consulta);
        if (!$consulta) {
          header("location: main.php");
        $_SESSION['username']=$usuario;
        }else{
          echo "Contraseña invalida!!!";
        }
      

     
      mysqli_close($conexion);
      */
  
 ?>
</body>
</html>

