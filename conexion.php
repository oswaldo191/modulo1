<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "midb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexion Fallida: " . $conn->connect_error);
}

$sql = "INSERT INTO tabla (dato)
VALUES ('valor')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo dato insertado con exitos!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "midb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row[""]. " " . $row[""]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>