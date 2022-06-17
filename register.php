<?php include 'template/header.php'; ?>

<div class="container scale-up-center" style="margin-bottom: 100px;">
    <div class="row justify-content-center m-5">
        <div class="col-md-6 mt-5">



            <!-- ? Alerts -->
            <?php if (isset($_GET['message']) && $_GET['message'] == 'error1') { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Debes ingresar todos los datos
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <?php if (isset($_GET['message']) && $_GET['message'] == 'error2') { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Opps! Las contraseñas no coinciden
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <?php if (isset($_GET['message']) && $_GET['message'] == 'error3') { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Opps! El email ya se encuentra registrado
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <?php if (isset($_GET['message']) && $_GET['message'] == 'errorRegistro') { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Opps! Hubo un error en el registro, intentalo de nuevo
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <!-- ? /Alerts -->


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registrarse</h5>
                    <form action="functions/user/registrar_usuario.php" method="POST">
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
                        <div class="form-group mb-3">
                            <label for="password_confirm">Confirmar contraseña</label>
                            <input required type="password" class="form-control" id="password_confirm" name="password_confirm">
                        </div>
                        <input type="hidden" name="oculto" value="1">
                        <div class="row">
                            <input type="submit" class="btn btn-success m-1" style="background-color:#54d56c; border:solid #2c6a37 2px;" value="Registrarse">
                            <a href="index.php" class="btn btn-link"><i class="bi bi-arrow-left"></i>Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>

<!--     include_once "model/conexion.php";
    $sentencia = $bd->query("SELECT * FROM users where email = .'".$_POST['email']."'");
    $users = $sentencia->fetchAll(PDO::FETCH_OBJ);
    print_r($users); -->