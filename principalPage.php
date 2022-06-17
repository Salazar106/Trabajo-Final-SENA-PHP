<?php include 'template/header.php'; ?>

<?php
/* Se llaman los datos de la tabla events */
include_once 'model/conexion.php';
$query = $bd->query("SELECT * FROM citas");
$events = $query->fetchAll(PDO::FETCH_OBJ);

/* Se cuenta cada evento */

?>

<div class="container mt-5 scale-up-center" style="margin-bottom: 100px;">
    <div class="row">

        <!-- ? Alerts -->
        <?php if (isset($_GET['message']) && $_GET['message'] == 'successLogin') { ?>
            <script>
                window.onload = function alertSuccess() {
                    swal({
                        title: "😁Inicio de sesión exitoso🎊",
                        text: "Ahora puedes acceder a tu cuenta",
                        icon: "success",
                        position: "center",
                        showConfirmButton: false,
                        timer: 1000
                    });
                }
            </script>
        <?php } ?>

        <?php if (isset($_GET['message']) && $_GET['message'] == 'error4') { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Opps! Ya estás registrado en el evento para esa semana 😒.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <?php if (isset($_GET['message']) && $_GET['message'] == 'error5') { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Opps! Ya se terminaron los cupos disponibles😭😭.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>



        <?php if (isset($_GET['message']) && $_GET['message'] == 'successNewEvent') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Se ha registrado el evento correctamente😎👍.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <?php if (isset($_GET['message']) && $_GET['message'] == 'eliminado') { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Se ha eliminado el evento correctamente😎👍.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <?php if (isset($_GET['message']) && $_GET['message'] == 'success') { ?>
            <script>
                window.onload = function alertSuccess() {
                    swal({
                        title: "Te has registrado",
                        text: "Puedes seguir viendo los eventos👀",
                        icon: "success",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 1000
                    });
                }
            </script>
        <?php } ?>

        <?php if (isset($_GET['message']) && $_GET['message'] == 'errorRegistro') { ?>
            <script>
                window.onload = function alertSuccess() {
                    swal({
                        title: "Opps!",
                        text: "Algo salió mal, intenta de nuevo😭",
                        icon: "success",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 1000
                    });
                }
            </script>
        <?php } ?>

        <!-- ? Alerts -->

        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <h5 class="card-title col-md-4">Eventos</h5>
                    <?php if (isset($_SESSION['user']) && ($_SESSION['user']['role'] == 'admin')) { ?>
                        <form action="functions/event/nuevoEvento.php" class="col-md-2 ">
                            <input type="submit" class="boton1 " value="✖️ Nuevo evento">
                        </form>
                    <?php } ?>

                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="background-color: #2967af;color:azure"scope="col">#</th>
                            <th style="background-color: #2967af;color:azure"scope="col">Nombre</th>
                            <th style="background-color: #2967af;color:azure"scope="col">Mes</th>
                            <th style="background-color: #2967af;color:azure"scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($events as $event) {
                        ?>

                            <tr>
                                <th scope="row"><?php echo $event->id ?></th>
                                <td><?php echo $event->name ?></td>
                                <td><?php echo $event->month ?></td>
                                <td>
                                    <a class="boton" href="functions/event/registrar_evento.php?eventId=<?php echo $event->id ?>">Registrate</a>
                                    <?php if (isset($_SESSION['user']) && ($_SESSION['user']['role'] == 'admin')) { ?>
                                        <a class="boton2" href="functions/event/eliminar_evento.php?codigo=<?php echo $event->id ?>">Eliminar</a>
                                    <?php } ?>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>





<?php include 'template/footer.php'; ?>