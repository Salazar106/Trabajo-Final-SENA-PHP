<?php include 'template/header.php' ?>


<div class="row row-cols-1 row-cols-md-2 g-4 p-5 align-item-center" style="margin-bottom:100px">
    <div class="col">
        <div class="card h-100">
            <img src="img/REGISTRATE2.png" class="card-img-top shake-horizontal" alt="...">
            <div class="card-body">
                <h2 class="card-title text-center">Formulario </h2>
                <p class="card-text">Diligencia los datos para pedir tu cupo</p>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione el dia del Evento</option>
                        <option value="1">lunes</option>
                        <option value="2">Martes</option>
                        <option value="3">Miercoles</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione el Horario de asistencia</option>
                        <option value="1">8:00 AM</option>
                        <option value="2">2:00 PM</option>
                    </select>
                </div>
                <div class="mb-3 justify-content-end">
                    <input type="submit" class="btn btn-success m-1" style="background-color:#54d56c; border:solid #2c6a37 2px;" value="Separa tu cupo">

                </div>

            </div>
            <div class="card-footer">
                <div class="container px-4">
                    <div class="row gx-5">
                        <div class="col">
                            <div class="p-3 border bg-light">
                                <small class="text-muted">
                                    <label class="form-label">Cupos disponibles 8 AM</label>
                                    <input type="text" value="100" readonly style="width: 35px; ;">
                                </small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light">
                                <small class="text-muted">
                                    <label class="form-label">Cupos disponibles 2 PM</label>
                                    <input type="text" value="100" readonly style="width: 35px; ;">
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="img/imagen-conferencia.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Descripcion del evento</h5>
                <p class="card-text">Aprende todas las tecnicas de marketing con el mejor maestro Daniel Peña, no te pierdas esta gran oportunidad y registrate para que hagas realidad todos tus proyectos</p>
            </div>

        </div>
    </div>
</div>




<?php include 'template/footer.php' ?>