<?php 
    session_start();
                    $mensaje="";
    if (isset($_POST['captcha'])&&$_POST['captcha']==$_SESSION['code']) {
        $mensaje ="<p id='menss'>Codigo valido</p> <br> <form id='formulario' action='loguear.php' method='post'>
            <p>Nombre de usuario: <br>
        <input type='text' name='username'></p>
        <p>Password: <br>
        <input type='password' name='password'></p>
        <p class='center'><input class='btn btn-primary' type='submit' value='Iniciar Sesión'></p> 
        <a class='btn btn-primary' href='registrarse.html'>Registrarse</a>
    </form>";
        
        //echo $mensaje;
    }else{
        $mensaje="<p id='menss2'>Codigo invalido</p>";
        //echo $mensaje;
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <link rel="shortcut icon" href="img/icon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/mdb.min.css">
   <link rel="stylesheet" href="css/style.css">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-image: url(http://www.cedricat.cat/pics/b/6/66901_movie-background-images.jpg);
            text-align: center;
            margin-top: 7%;
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .tituloform{
            font-size: 30px;
            color: rgb(224, 173, 76);
    
        }
        #formulario{
            font-size: 25px;
            color: blue;
            margin: 5%;
            background-color: rgb(88, 130, 196,0.4);
        }
        .seccionFormulario{
            background-image: url(https://66.media.tumblr.com/3614deac85fc805abf6f39d0be278714/tumblr_orf486SAlV1uzwgsuo1_400.gifv);
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100%;
            /*background-color: white;*/
            margin: 8%;
            padding: 5%;
            width: 50%;
            margin-top: 5%;
            margin-left: 25%;
            
        }
        .nac{
            background-color: rgb(54, 126, 153);
            margin-top: -112px;
        }
        .capt{
            border: 1px solid #d0d0d0;
            border-color: #aaaaaa;
            border-width: 3px;
            border-style: solid;
            height: 150px;
            width: 350px;
            margin-left: 28%;
        }
        #menss{
            color: blue;
            font-size: 30px;

        }
        #menss2{
            color: red;
            font-size: 30px;
        }
        form label{
             color: rgb(224, 173, 76);
            font-size: 25px;
        }
        body footer{
            position: absolute;
            width: 100%;

            background-color: rgb(54, 126, 153); 
        }
    </style>
</head>
<body>
    <nav class="nac">
        <ul>
            <li></li>
            <li>
                <img src="https://cdn.pixabay.com/photo/2016/06/15/08/23/tape-1458416_960_720.png" style="width: 110px; height: 50px; margin-right: 0%;"><br>
                <p style="color: white;">Peli-Paradise</p>
            </li>
        </ul>
        
    </nav>
    <div class="backcontainer">
    <section class="seccionFormulario">
        <h1 class="tituloform">Bienvenido.</h1>
        

            <form action="#" method="post">
            <div class="capt">
            <td>
                <label>Ingrese el contenido de la imagen</label><br>
            </td>
            <tr>
            <td width="60px">
                <input type="text" name="captcha" size="6" maxlength="6" required>
            </td>
                <td><img src="captcha.php"></td>
            </tr>
            <input class="btn btn-primary" type="submit" value="Validar">
            </div>
            </form>
            
            <br>
            
        
        <div>
            <p>
                <?php 
                    echo $mensaje;
                    
                 ?>
            </p>
        </div>
        
    </section>
    </div>
<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">
    <p style="font-size: 20px;">© 2019 Copyright: Diseñado por: Jose Andres Brenes Arce</p>
  </div>
</footer>
   
</body>
</html>