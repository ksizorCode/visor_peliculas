<?
$nombre="Funkos ciencia ficción";
$year=2029;
$idioma="fr-CA";

$img1='wall-e.jpg';
?>

<!DOCTYPE html>
<html lang="<? echo $idioma ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $nombre?></title>
    <meta name="description" content="<? echo $nombre?> es no de los mejores sitios de su sector.">
</head>
<body>
    <h1><? echo $nombre?></h1>
    <h2>Bienvenidos a <? echo $nombre?></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus rem nisi perspiciatis ipsa consectetur vel in blanditiis? Atque, voluptatem tempore voluptatibus ex repudiandae aliquid debitis, iste minus, maxime at nobis.</p>
    <img src="img/<? echo $img1?>" alg="<? echo $nombre?>">
    <footer>
        <p>&copy; Copyright <? echo $year?> - <? echo $nombre?></p>
    </footer>

    <img src="img/<? echo $img1?>" alg="<? echo $nombre?>">
    <img src="img/<? echo $img1?>" alg="<? echo $nombre?>">

    <img src="img/<? echo $img1?>" alg="<? echo $nombre?>">

</body>
</html>