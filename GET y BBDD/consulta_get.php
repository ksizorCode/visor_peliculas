<?php

/*
FORMATO GET (esto se pone en la barra de direcciones)
index.php?t=Titanic&d=Dos+personas+se+conoce+en+un+barco&f=002.jpg&a=titanic.mp4&y=1997
*/

//Captura los valores de GET
$titulo = $_GET['t'];
//busca si hay t e iguala el valor a $titulo
// si t=Minion , $titulo=Minion a partir de ahora


$year = $_GET['y'];         // $year para año
$descripcion = $_GET['d'];  // $descripcion 
$fondo = $_GET['f'];
$archivo= $_GET['a'];

?>



<!-- soy un comentario -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?> - Netflix</title>
    <link rel="stylesheet" href="style.css">
<style>
    body{
        background-image:url('img/<?php echo $fondo ?> ')
    }
    </style>
</head>
<body>
    
<main>
    <h1 id="movieTitle"><? echo $titulo ?></h1>
    <p id="movieYear"><? echo $year ?></p>
    <p id="movieDesc"><?php echo $descripcion ?> </p>
    <button id="movieFile" href="<?php echo $archivo ?> ">Ver Película</button>
</main>


<footer>
<a href="index.php?t=Titanic&d=Unos+chicos+se+enamoran+y+la+relacion+se+hunde&f=titanic.jpg&a=titanic.mp4&y=1907"> <img src="img/titanic.jpg"> </a>
<a href="index.php?t=Minion&d=Unos%20seres%20amarillos%20ayudan%20al%20malvado%20Grut&f=minion.jpg&a=minion.mp4&y=2009"> <img src="img/minion.jpg"> </a>
<a href="index.php?t=Black+Mirror&d=Cosas+rarunas+que+van+a+pasar+en+el+futuro&f=blackmirror.jpg&a=blackmirror.mp4&y=2016"> <img src="img/blackmirror.jpg"> </a>
<a href="index.php?t=Toy+Story&d=Los+juguetes+cobra+vida&f=toy.jpg&a=toystory.mp4&y=1995"> <img src="img/toy.jpg"> </a>
</footer>

</body>
</html>