<?php include 'template/header.php'; ?>

<?php

include_once 'model/conexion.php';
$query = $bd->prepare("select 
u.names as 'name',
u.email,
concat(e.name, '- Semana ', r.semana) as 'event'
from personas u
join usuario_citas r on r.id_user = u.id
join citas e on e.id = r.id_event
order by u.names asc");
$result = $query->execute();
$events = $query->fetchAll(PDO::FETCH_OBJ);

?>


<div class="container mt-5 scale-up-center" style="margin-bottom: 100px;">
    <div class="row">

        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="row justify-content-between">
                        <h5 class="card-title col-md-4">Eventos</h5>
                        <?php if (isset($_SESSION['user']) && ($_SESSION['user']['role'] == 'admin')) { ?>
                            <form action="functions/event/dataDownload.php" class="col-md-2">
                                <input class="boton1" value="Descargar informe" type="submit">
                            </form>
                        <?php } ?>

                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="background-color: #2967af;color:azure"scope="col">Nombre</th>
                                <th style="background-color: #2967af;color:azure"scope="col">Email</th>
                                <th style="background-color: #2967af;color:azure"scope="col">Evento</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($events as $event) { ?>
                                <tr>
                                    <td><?php echo $event->name ?></td>
                                    <td><?php echo $event->email ?></td>
                                    <td><?php echo $event->event ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>