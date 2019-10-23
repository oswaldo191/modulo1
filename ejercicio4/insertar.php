<?php 
$nombre  = $_POST["name"]; 

$apellido = $_POST["lastname"]; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio4</title>
</head>
<body>


<h1>Datos recibido</h1>

<?php 

$dato  = array('nombre' => $nombre, 'apellido' => $apellido);

echo "<p>" . $dato['nombre']. ' '.$dato['apellido']. "</p>";

?>

</body>
</html>




