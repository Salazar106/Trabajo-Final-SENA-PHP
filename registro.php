<?php include 'template/header.php' ?>
<div class="container mt-1 " style="margin-bottom:100px">
    <div class="row justify-content-center align-items-center  ">
        <div class="col-md-4 mt-4">
            <div class="card mb-3 ">
                <div class="card-header ">
                    <h3>Registrate Aqui</h3>
                </div>
                <form action="registrar.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="name" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Documento: </label>
                        <input type="number" class="form-control" name="document" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email: </label>
                        <input type="text" class="form-control" name="email" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" name="clave" autofocus required>
                    </div>
                        <input type="hidden" name="oculto" value="1">
                        <div class="row">                            
                            <input type="submit" class="btn btn-success m-1" style="background-color:#54d56c; border:solid #2c6a37 2px;" value="Registrarse">
                            <a href="login.php" class="btn btn-link"><i class="bi bi-arrow-left"></i>Regresar</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php' ?>