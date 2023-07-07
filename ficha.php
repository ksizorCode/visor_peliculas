<?php

/*
Captura los valores de GET
desde el apartado de catálogo se ha hecho click
en un enlace que pondríaalgo así como:
ficha.php?id=3434 Ese valor es el que vamos
aconsultar en la base de datos
*/

$id = $_GET['p'];

// CONSULTAMOS LA BASE DE DATOS
//Metemos en variables los datos de acceso de la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "catalogo";

// Crear conexión con los datos anteriores
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobar Conexión. Si falla escribe un mensaje con el error
if ($conn->connect_error) {
  die("La conexion ha fallado: " . $conn->connect_error);
}

// Definimos la consulta SQL
$sql = "SELECT * FROM peliculas WHERE titulo='$id'";
// Lanzamos la consulta
$result = $conn->query($sql);

// En el caso de que haya más de 0 resultados haz lo siguiente
if ($result->num_rows > 0) {
  // Realiza un bucle (algo que repetirá tantas veces como resultados)
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
    $titulo = $row["titulo"];
    $descripcion = $row["descripcion"];
    $fondo = $row["foto"];
    $year = $row["year"];
    $director = $row["director"];
    $estrellas = $row["estrellas"];
  }
} 
else{}

  //Cerramos la conexión
  $conn->close();
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
    background-image:url(img/<? echo $fondo;?>);
  }
  </style>

</head>
<body>
    
<main>


      <h1><? echo $titulo?></h1>
      <p><? echo $year." | ".$director." | ".$estrellas ?></p>
      <p><? echo $descripcion ?></p>
      <a href='index.php'> <button>Volver a catálogo</button></a>


</main>




</body>
</html>