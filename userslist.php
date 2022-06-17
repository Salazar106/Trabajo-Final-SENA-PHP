<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select * from personas");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($persona);
?>
 <?php include 'template/header.php' ?>


    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
    ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="bi bi-exclamation-diamond"></i> Error Fatal!</strong> Faltan Campos Por Llenar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'Registrado') {
    ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><i class="bi bi-check-circle"></i> Excelente!</strong> Registro exitoso.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
    }
    ?>

    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
    ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="bi bi-exclamation-diamond"></i> Error Fatal!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
    ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><i class="bi bi-check-circle"></i>Excelente!</strong> Actualizacion exitosa.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
    }
    ?>


    <div class=" m-3">
        

        <div class="card body p-4">
        <h3>Lista de Usuarios</h3>
            <div class="row justify-content-end ">
                <button type="button" class="boton1 col-md-2 mb-3 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-person-plus"></i> Crear
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingrese los Datos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="registraruser.php" class="p-4" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre: </label>
                                        <input type="text" class="form-control" name="names" autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email: </label>
                                        <input type="text" class="form-control" name="email" autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Contraseña: </label>
                                        <input type="password" class="form-control" name="password" autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Rol: </label>
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option value="user" selected>user</option>
                                            <option value="admin">admin</option>

                                        </select>
                                    </div>

                                    <div class="modal-footer d-grid">
                                        <input type="hidden" name="oculto" value="1">
                                        <input type="submit" class="boton" value="Registrar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-light table-bordered border-default table-striped" id="tabla">
                <thead>
                    <tr>
                        <th style="background-color: #2967af;color:azure" scope="col">ID</th>
                        <th style="background-color: #2967af;color:azure" scope="col">Nombre</th>
                        <th style="background-color: #2967af;color:azure" scope="col">Email</th>
                        <th style="background-color: #2967af;color:azure" scope="col">Contraseña</th>
                        <th style="background-color: #2967af;color:azure" scope="col">rol</th>
                        <th style="background-color: #2967af;color:azure" scope="col" colspan="2">Funciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($persona as $dato) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo $dato->id; ?></td>
                            <td><?php echo $dato->names; ?></td>
                            <td><?php echo $dato->email; ?></td>
                            <td><?php echo $dato->password; ?></td>
                            <td><?php echo $dato->role; ?></td>
                            <td><a href="functions/user/editar_usuario.php?codigo=<?php echo $dato->id; ?>" class="btn btn-primary" style="border-radius: 50%;"><i class="bi bi-pencil-square"></i></a> </td>
                            <td><a href="functions/user/eliminar_usuario.php?codigo=<?php echo $dato->id; ?>" class="btn btn-danger" style="border-radius: 50%;"><i class="bi bi-trash"></i></button></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>



    <?php include 'template/footer.php' ?>