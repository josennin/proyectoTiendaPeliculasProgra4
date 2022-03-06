<?php 
    session_start();
    $usu=$_SESSION['username'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="shortcut icon" href="img/icon.ico"/>
    <link rel="stylesheet" href="css/main.css">
    <style>
        body{
            background-image: url(http://www.cedricat.cat/pics/b/6/66901_movie-background-images.jpg);
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .stock{
            width: 50%;
            height: 50%;
            margin-left: 25%;
            background-color: rgb(54, 126, 153,0.4);
            color: rgb(196, 41, 41);
            font-size: 25px; 
        }
    </style>
</head>
<body>
    <?php
        include_once('layout/menu.php');
    ?>
    <div class="stock">
    <main>
        <?php
            $response = json_decode(file_get_contents('http://localhost/proyectoProgra4/api/productos/api-productos.php?categoria=pelicula'), true);
            if($response['statuscode'] == 200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
            }else{
                echo $response['response'];
            }
        ?>
        
    </main>
    </div>
    <script src="js/main.js"></script>

    
</body>
</html>