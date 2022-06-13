<?php include 'template/header.php' ?>
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
                <form action="funciones/login_usuario.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa-solid fa-alien"></i><i class="bi bi-person-fill"></i></span>
                            <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" require placeholder="Correo Electronico">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><i class="bi bi-lock-fill"></i></i></span>
                            <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" require placeholder="Contraseña">
                        </div>
                    </div> 
                    <div class="d-grid">
                       <p>¿Aun no tienes una cuenta? <a href="registro.php">Registrate aqui</a></p>

                        <input type="submit" class="btn btn-success shadow-drop-center m-1" style="background-color:#54d56c; border:solid #2c6a37 2px" value="Iniciar Sesion">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php' ?>