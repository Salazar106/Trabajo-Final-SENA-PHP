<?php 
    if(!isset($_GET['codigo'])){
        header('Location: ../../userslist.php?message=error');
        exit();
    }

    include '../../model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM personas where id = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: ../../userslist.php?message=eliminado');
    } else {
        header('Location: ../../userslist.php?message=error');
    }
    
?>