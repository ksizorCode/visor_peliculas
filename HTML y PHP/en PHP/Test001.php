

<?
//esto es un comentario de línea

/*
Esto es un
comentario de párrafo
 */

$nombre ="María";
$apellido ="Garía";
$nacim=2010;

$texto =$nombre." ".$apellido." tiene ".(2023-$nacim)." porque ha nacido en el año ".$nacim;
?>

<h1>1 Pepito Martinez nacido tiene 24 años</h1>

<h1>2 <? echo $nombre?> <? echo $apellido?> nacido tiene <? echo (2023-$nacim)?> años porque nació en el año <? echo $nacim?></h1>

<h1><? echo $nombre; ?></h1>
<h1><? echo "lo que yo quiera"; ?>

<h1><? echo $nombre;?> <? echo $apellido;?></h1>
<h1><? echo $nombre." ".$apellido ?></h1>
<h1><? echo $texto ?></h1>


