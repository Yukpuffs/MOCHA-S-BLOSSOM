<?php

include("conexion.php");

// para iniciar sesión
$email=$_POST['email'];
$passwordd=$_POST['passwordd'];

$sql = "INSERT INTO ini_sesi(email, passwordd) VALUES ('$email', '$passwordd')";

if ($conn->query( $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<a href="../html/menu.php">Volver al menu </a>

