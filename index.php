<?php

// Código para consultar la base de datos

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
$sql = "SELECT * FROM peliculas";
// Lanzamos la consulta
$result = $conn->query($sql);

?>



<!-- soy un comentario -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?> - Netflix</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<main>
    <?php

// En el caso de que haya más de 0 resultados haz lo siguiente
if ($result->num_rows > 0) {
    // Realiza un bucle (algo que repetirá tantas veces como resultados)
    echo '<ul>';
    while($row = $result->fetch_assoc()) {
      echo "<li>";
      echo "<a href='ficha.php?p=". $row["titulo"]."'>";
      echo "<img src='img/".$row["foto"]."' alt=".$row["titulo"].">";
      echo "</a>";
      echo "<h3>".$row["titulo"]."</h3>";
      echo "</li>";
    }
    echo '</ul>';
  } else {
    echo "<h2>No se han encontrado películas :(</h2>";
  }
  $conn->close();

?>
</main>




</body>
</html>