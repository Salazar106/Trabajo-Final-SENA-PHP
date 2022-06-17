<?php include 'template/header.php'; ?>


            <!-- ? Alerts -->
            <?php if (isset($_GET['message']) && $_GET['message'] == 'success') { ?>

                <script>
                    window.onload = function alertSuccess() {
                        swal({
                            title: "Registro exitoso",
                            text: "Ahora puedes iniciar sesión",
                            icon: "success",
                            button: "Ok",
                            position:'center',
                        });
                    }
                </script>
            <?php } ?>

            <?php if (isset($_GET['message']) && $_GET['message'] == 'errorLogin') { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    El usuario o contraseña son incorrectos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <!-- /Alerts -->

            <div class="container mt-5 jello-horizontal">
    <div class="row justify-content-center align-items-center  ">
        <div class="col-md-4 mt-4">
            <div class="card mb-3 ">
                <div class="card-header ">
                    <div class="row">

                        <h3 class="col-auto">Ingresar al sistema </h3>
                        <img class="col-auto" src="https://cdn-icons-png.flaticon.com/512/2037/2037507.png" alt="key" style="width: 60px; height:110%">
                    </div>
                </div>
                <form action="functions/user/login_usuario.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa-solid fa-alien"></i><i class="bi bi-person-fill"></i></span>
                            <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required placeholder="Correo Electronico">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><i class="bi bi-lock-fill"></i></i></span>
                            <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="d-grid">
                        <p>¿Aun no tienes una cuenta? <a href="register.php">Registrate aqui</a></p>

                        <input type="submit" class="btn btn-success shadow-drop-center m-1" style="background-color:#54d56c; border:solid #2c6a37 2px" value="Iniciar Sesion">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>


<!--     include_once "model/conexion.php";
    $sentencia = $bd->query("SELECT * FROM users where email = .'".$_POST['email']."'");
    $users = $sentencia->fetchAll(PDO::FETCH_OBJ);
    print_r($users); -->




<?php include 'template/footer.php'; ?>