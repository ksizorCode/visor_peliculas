<?php
$titulo="Cine Tricampus";
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
    <li>
        <img src="img/mision-imposible.jpg" alt="Misión Imposible 7">
        <h3>Misión Imposible 7</h3>
        <p>18:30</p>
        <p>20:30</p>
        <p>22:30</p>
    </li>

    <li>
        <img src="img/barbie.jpg" alt="Barbie">
        <h3>Barbie</h3>
        <p>16:30</p>
        <p>18:30</p>
        <p>20:30</p>
        <p>22:30</p>
    </li>

    <li>
        <img src="img/megalodon-2.jpg" alt="Megalodón 2">
        <h3>Megalodon</h3>
        <p>17:30</p>
        <p>19:30</p>
        <p>21:30</p>
    </li>

    <li>
        <img src="img/oppenheimer.jpg" alt="Oppenheimer">
        <h3>Oppenheimer</h3>
        <p>17:00</p>
        <p>20:00</p>
        <p>23:00</p>
    </li>
</ul>

</main>

<footer>
    <p>&copy; Copyright 2023 - <? echo $titulo;?></p>
</footer>

</body>
</html>