<?php include 'template/header.php' ?>
<div class="container mt-5 ">
    <div class="row justify-content-center align-items-center  ">
        <div class="col-md-4 mt-4">
            <div class="card mb-3 ">
                <div class="card-header ">
                   <h3>Ingresar al sistema</h3>
                </div>
                <form action="" class="p-4" method="">
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
                    </div> <br>                   
                    <div class="d-grid">
                        <input type="submit" class="btn btn-success m-1" style="background-color:#54d56c; border:solid #2c6a37 2px" value="Iniciar Sesion">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php' ?>