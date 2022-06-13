<?php

$email = $_POST['email'];
$password = $_POST['password'];

session_start();
$_SESSION['email'] = $email;



$conexion = mysqli_connect("localhost", "root", "", "crudsitofinal");

$query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conexion, $query);

$rows = mysqli_num_rows($result);

if ($rows > 0) {
    header("Location: ../../index.php");
} else {
    header("Location: ../../login.php");
}

mysqli_close($conexion);
