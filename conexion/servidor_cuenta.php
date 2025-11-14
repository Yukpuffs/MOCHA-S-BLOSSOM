<?php

include("conexion.php");

// para registrar datos de cuenta del usuario

$nombre = $_POST["nombre"];
$corre_E = $_POST["corre_E"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$num_tarj = $_POST["num_tarj"];

$sql = "INSERT INTO cuenta(nombre, corre_E, telefono, direccion, num_tarj) VALUES ('$nombre', '$corre_E', '$telefono', '$direccion', '$num_tarj')";


if ($conn->query( $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>

<a href="../html/menu.php">Volver al menu </a>