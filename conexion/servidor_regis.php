
<?php

include("conexion.php");

// para registrar usuarios
$usuario=$_POST['usuario']; 
$email=$_POST['email'];
$passwordd=$_POST['passwordd'];

$sql = "INSERT INTO regis (usuario, email, passwordd) VALUES ('$usuario', '$email', '$passwordd')";


if ($conn->query( $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

