<?php

include("conexion.php");

// para registrar datos de pedido

$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$metodo_pago=$_POST['metodo_pago'];
$numtelefono=$_POST['numtelefono'];
$nom=$_POST['nom'];
$cor_elec=$_POST['cor_elec'];

$sql = "INSERT INTO pedidos_nequi(nombre, direccion, telefono, email, fecha, hora, metodo_pago,numtelefono, nom, cor_elec) VALUES ('$nombre', '$direccion', '$telefono', '$email', '$fecha', '$hora','$metodo_pago', '$numtelefono', '$nom', '$cor_elec')";

if ($conn->query( $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>


<a href="menu.php">Volver al menu </a>