<?php include 'template/header.php' ?>
<div class=" m-3">
    <div class="card-header text-center" style="background-color: #DBF2FA; color:black">
        <h2>Lista de Usuarios</h2>
    </div>

    <div class="card body p-4">
        <div class="row justify-content-end ">
            <button type="button" class="btn btn-success col-md-2 mb-3 " data-bs-toggle="modal" style="background-color:#54d56c; border:solid #2c6a37 2px" data-bs-target="#exampleModal">
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
                                <div class="modal-footer d-grid">
                                    <input type="hidden" name="oculto" value="1">
                                    <input type="submit" class="btn btn-dark" style="background-color:#54d56c; border:solid #2c6a37 2px" value="Registrar">
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
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col" colspan="2">Funciones</th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td scope="row">1</td>
                    <td>JOSE LUIS</td>
                    <td>1037632160</td>
                    <td>josesito@gmail.com</td>
                    <td>jose123</td>
                    <td><a href="" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a> </td>
                    <td><a href="" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>



<?php include 'template/footer.php' ?>