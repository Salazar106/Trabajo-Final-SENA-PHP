<?php
if (!isset($_GET['codigo'])) {
    header('location: index.php?mensaje=error');
    exit();
}

include_once '../../model/conexion.php';
$codigo = $_GET['codigo'];

$sentencia = $bd->prepare("select * from personas where id = ?;");
$sentencia->execute([$codigo]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../../styles/estilos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="icon" href="../../assets/img/logo.png">
    <title>Evento</title>
</head>

<body>

    <div class="row m-0 vh-100 justify-content-center align-items-center scale-up-center">
        <div class="col-md-6 p-5">
            <div class="card m-3">
                <div class="card-body">
                    <div class="card-tittle">
                        <h5 class="card-title text-center">Actualiar Usuario</h5>
                    </div>
                    <form action="editar_usuario_proceso.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nombre: </label>
                            <input type="text" class="form-control" name="names" autofocus required value="<?php echo $persona->names ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email: </label>
                            <input type="text" class="form-control" name="email" autofocus required value="<?php echo $persona->email ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña: </label>
                            <input type="text" class="form-control" name="password" autofocus required value="<?php echo $persona->password ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rol: </label>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option value="user" selected>user</option>
                                <option value="admin">admin</option>

                            </select>
                        </div>
                        <input type="hidden" name="oculto" value="1">
                        <div class="row">
                            <input type="submit" class="boton m-1" value="Actualizar">
                            <a href="../../userslist.php" class="text-center"><i class="bi bi-arrow-left"></i>regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include '../../template/footer.php' ?>