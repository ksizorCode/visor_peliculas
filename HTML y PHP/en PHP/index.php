<?php
$titulo="Cine Tricampus";

// Array = contiene una lista de elementos
$salas=[
    ['Barbie','barbie.jpg','16:00','18:00','20:00'],
    ['Mision Imposible','misionimposible.jpg','16:00','18:00','20:00'],
    ['Megalodon','megalodon-2.jpg','16:00','18:00','20:00'],
    ['Oppenheimer','Oppenheimer.jpg','16:00','18:00','20:00']
];


?>


<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $titulo;?></title>
    <link rel="stylesheet" href="style.css">
    
    <meta name="description" content="Cartelera de Cines Tricampus. El mejor cine en Gijón.">
</head>
<body>

<main>
    <h1><? echo $titulo;?></h1>
    <h2>Bienvenidos a<? echo $titulo;?>, el mejor cine al mejor precio</h2>
    <p>Esta semana te ofrecemos en nuestra cartelera, todos los días de Lunes a Domingo las siguientes películas:</p>

<ul>

<?

foreach($salas as $misala){
    echo '<li>';
    echo '<h3>'.$misala[0].'<h3>';
    echo '</li>';

}



?>
    <li>
        <img src="img/<? echo $sala1[1]?>" alt="Misión Imposible 7">
        <h3><? echo $sala1[0]?></h3>
        <p><? echo $sala1[2]?></p>
        <p><? echo $sala1[3]?></p>
        <p><? echo $sala1[4]?></p>
    </li>



</ul>

</main>

<footer>
    <p>&copy; Copyright 2023 - <? echo $titulo;?></p>
</footer>

</body>
</html>