<?php

include("conexion.php");

// para registrar datos de personalización

$sabor = $_POST["sabor"];
$rel = $_POST["rel"];
$tamano = $_POST["tamano"];
$cober = $_POST["cober"];
$decor = $_POST["decor"];

$sql = "INSERT INTO personalizacio(sabor, rel, tamano, cober, decor) VALUES ('$sabor', '$rel', '$tamano', '$cober', '$decor')";


if ($conn->query( $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>

<a href="../html/menu.php">Volver al menu </a>