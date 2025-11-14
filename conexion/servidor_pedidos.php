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
$Num_tarj=$_POST['Num_tarj'];
$CVV=$_POST['cvv'];
$fech_cad=$_POST['fech_cad'];

$sql = "INSERT INTO pedidos(nombre, direccion, telefono, email, fecha, hora, metodo_pago, Num_tarj, cvv, fech_cad) VALUES ('$nombre', '$direccion', '$telefono', '$email', '$fecha', '$hora','$metodo_pago', '$Num_tarj', '$CVV', '$fech_cad')";

if ($conn->query( $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>

<a href="menu.php">Volver al menu </a>