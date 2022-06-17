<?php

print_r($_POST);
if (!isset($_POST['codigo'])) {
    header('Location: ../../userslist.php?message=error');
}

include '../../model/conexion.php';

$names = $_POST["names"];
$email = $_POST["email"];
$password = $_POST["password"];
$role = $_POST["role"];

$sentencia = $bd->prepare("UPDATE personas SET names=?,email=?,password=?,role=? where id=?;");
$resultado = $sentencia->execute([$names,$email,$password,$role]);

if ($resultado === TRUE) {
    header('Location: ../../userslist.php?mensaje=editado');
} else {
    header('Location: ../../userslist.php?message=error');
    exit();
}