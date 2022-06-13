<!doctype html>
<html lang="en">

<head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="styles/estilos.css" rel="stylesheet">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <link rel="icon" href="https://cdn-icons.flaticon.com/png/512/780/premium/780575.png?token=exp=1655155307~hmac=7cf49a985dc54a7f8f6d049a1bde162e">
    <script src="https://kit.fontawesome.com/53a7b5c861.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    session_start();

    if (isset($_SESSION['email']) && $_GET['mensaje'] != 'errorLogin') {

    ?>

        <ul class="nav justify-content-end  p-3" style="background-color: #54d56c; border-bottom:solid 3px #2c6a37">
            <h5 class="text-center m-3 ">Welcome <?php echo $_SESSION['email']; ?></h5>
            <li class="nav-item">
                <a class="btn btn-success blur-in m-1" style="border:solid #2c6a37 2px" href="usuarios.php">Usuarios</a>
            <li class="nav-item">
                <a class="btn btn-success blur-in m-1" style="border:solid #2c6a37 2px" href="index.php">Eventos</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-success blur-in m-1" style="border:solid #2c6a37 2px" href="funciones/cerrarsesion.php">Cerrar Sesion</a>
            </li>
        </ul>
    <?php } else { ?>
        <ul class="nav justify-content-end  p-3" style="background-color: #54d56c; border-bottom:solid 3px #2c6a37">
            <li class="nav-item">
                <a class="btn btn-success blur-in m-1" style="border:solid #2c6a37 2px" href="login.php">Iniciar Sesion</a>
        </ul>
    <?php } ?>