<?php
$titulo="Cine Tricampus";

// Array = contiene una lista de elementos
$salas=[
    ['Barbie','barbie.jpg','16:00','18:00','20:30'],
    ['Mision Imposible','mision-imposible.jpg','17:50','18:00','20:00'],
    ['Megalodon','megalodon-2.jpg','16:00','18:00','21:15'],
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
    echo '<img src="img/'.$misala[1].'" alt="'.$misala[0].'">';
    echo '<h3>'.$misala[0].'<h3>';
    echo '<p>'.$misala[2].'</p>';
    echo '<p>'.$misala[3].'</p>';
    echo '<p>'.$misala[4].'</p>';
    echo '</li>';

}



?>


</ul>

</main>

<footer>
    <p>&copy; Copyright 2023 - <? echo $titulo;?></p>
</footer>

</body>
</html>