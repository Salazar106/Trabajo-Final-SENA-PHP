<?php
include_once '../../model/conexion.php';
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

/* Descarga un excel con los datos de la tabla */

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=usuariosSuscritos.xls");
?>

<table>
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Evento</th>
    </tr>

    <?php foreach ($events as $event) { ?>
        <tr>
            <td><?php echo $event->name ?></td>
            <td><?php echo $event->email ?></td>
            <td><?php echo $event->event ?></td>
        </tr>
    <?php } ?>
</table>