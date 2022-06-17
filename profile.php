<?php include 'template/header.php'; ?>

<?php
include_once 'model/conexion.php';
$query = $bd->prepare("
select concat(e.name, ' - Semana ' ,r.semana,' - ', r.dia) as 'event' from personas u
join usuario_citas r on u.id = r.id_user
join citas e on e.id = r.id_event
where u.id = ?
order by e.name asc
");
$result = $query->execute([$_SESSION['user']['id']]);
$events = $query->fetchAll(PDO::FETCH_OBJ);
?>
<!-- ? profile -->

<div class="d-flex position-relative  align-item-center mt-5">
    <img src="assets/img/logo.png" style="border-radius: 50%; background-color: #35c2c7; width:15% ; height:15%" class="m-2 p-3 card-img-top shake-horizontal" alt="...">
    <div>
        <div class="row row-cols-1 row-cols-md-2 g-4 align-item-center" style="margin-bottom:100px">
            <div class="col">
                <div class="card h-100 ">
                    <div class="card-body">

                        <h3 class="card-title"><?php echo $_SESSION['user']['names'] ?> </h3>
                        <h5><b>Email:</b> <?php echo $_SESSION['user']['email'] ?> </h5>
                        <?php if (isset($_SESSION['user']) && ($_SESSION['user']['role'] == 'admin')) { ?>
                            <h5><b>Rol:</b> <?php echo $_SESSION['user']['role'] ?> </h5>
                        <?php } ?>
                        <a href="editUser.php?message=null" class="boton1 text-end">Editar</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Eventos suscritos</h5><hr>
                        <?php 
                        
                        foreach ($events as $event) { ?>
                            <ul class="list-group m-1">
                                <li class="list-group-item"><?php echo $event->event ?></li>
                            </ul>
                        <?php } if(!isset($event)){
                            
                            echo "<p>Aun no te has inscrito a ningun evento</p>";
                        } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php'; ?>