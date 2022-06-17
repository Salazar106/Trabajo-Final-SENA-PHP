
<?php
include 'template/header.php';
?>



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
                <a href="index.php?message=null" class="btn btn-link"><i class="bi bi-arrow-left"></i>Regresar</a>
            </div>
        </form>
    </div>
</div>

<?php
include 'template/footer.php';
?>