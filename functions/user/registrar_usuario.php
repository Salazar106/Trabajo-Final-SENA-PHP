<?php

/* ? Validaciones */

if (
    empty($_POST["oculto"]) ||
    empty($_POST["names"]) ||
    empty($_POST["email"]) ||
    empty($_POST["password"]) ||
    empty($_POST["password_confirm"])
) {

    header("Location: ../../register.php?message=error1");
    exit;
}
if (
    $_POST["password"] != $_POST["password_confirm"]
) {
    header("Location: ../../register.php?message=error2");
    exit;
}

include "../../model/conexion.php";
/* Email validator */
$emailExist = $bd->prepare("SELECT * FROM personas WHERE email = ?");
$emailResult = $emailExist->execute([$_POST["email"]]);
$email = $emailExist->fetchAll(PDO::FETCH_OBJ);

if ($emailResult === true) {
    if (count($email) > 0) {
        /* Email error */
        header("Location: ../../register.php?message=error3");
        exit;
    } else {
        /* Register */
        $names = $_POST["names"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = $bd->prepare("INSERT INTO personas (names, email, password) VALUES (?, ?, ?);");
        $result = $query->execute([$names, $email, $password]);

        if ($result === true) {
            header("Location: ../../index.php?message=success");
        } else {
            header("Location: ../../register.php?message=errorRegistro");
            exit;
        }
    }
}
