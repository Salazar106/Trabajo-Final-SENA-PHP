<?php
print_r($_POST);
if (
    empty($_POST["oculto"])
    || empty($_POST["names"])
    || empty($_POST["email"])
    || empty($_POST["password"])
    || empty($_POST["role"])

) {
    echo "Faltan Datos";
    header('Location: userslist.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';

$nombre = $_POST["names"];
$email = $_POST["email"];
$password = $_POST["password"];
$role = $_POST["role"];


$query = $bd->prepare("INSERT INTO personas(names,email,password,role) VALUES(?,?,?,?);");
$result = $query->execute([$nombre, $email, $password,$role]);

if ($result === TRUE) {
    header('location: userslist.php?mensaje=Registrado');
} else {
    header('Location: userslist.php?mensaje=error');
    exit();
}
