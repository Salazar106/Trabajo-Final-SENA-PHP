<?php
print_r($_POST);
if (empty($_POST["oculto"]) || empty($_POST["name"]) || empty($_POST["document"]) || empty($_POST["email"]) || empty($_POST["clave"])) {
    echo "Faltan Datos";
    header('Location: index.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';

$nombre = $_POST["name"];
$documento = $_POST["document"];
$email = $_POST["email"];
$clave=$_POST["clave"];

$sentencia = $bd->prepare("INSERT INTO personas(nombre,documento,email,password) VALUES(?,?,?,?);");
$resultado = $sentencia->execute([$nombre, $documento, $email, $clave]);

if ($resultado === TRUE) {
    header('location: index.php?mensaje=Registrado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
?>