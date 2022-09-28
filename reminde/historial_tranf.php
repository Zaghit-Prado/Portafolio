<?php
include 'Global/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Economic Rats | Historial-Tranferencias</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="Remix Zapata&Zaghit Prado" />
    <meta name="keywords" content="Zaghit Prado, Perú, Estudiante" />
    <meta name="keywords" content="Remix Zapata, Perú, Estudiante" />


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logo-gh.svg">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/3ffaa30c0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="assets/css/css/Yoda1.css">
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/mandalore">
    <link rel="stylesheet" href="assets/css/css/style1.css">

</head>

<body>
    <?php
    global $user;
    $user = $_GET['email'];
    $consulta = $conexion->query("SELECT * FROM `usuario` where correo='$user';");
    while ($fila = $consulta->fetch_array()) {
    ?>
        <?php if ($fila['correo'] < null) { ?>
            <?php
            echo '
    <script>
    alert("se cerro sesion")
    </script>';
            ?>

        <?php } else { ?>

            <?php
            include "template/navbar.php";
            ?>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4" style="background-color: #0d1117 !important; background-clip: padding-box;
                            box-shadow: 0 2px 6px 0 rgb(67 89 113 / 12%);color:white">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0">Transferencias realizadas</h6>
                        <?php
                        global $user;
                        $user = $_GET['email'];
                        $consulta = $conexion->query("SELECT t.id_registro,r.correo,t.id_tra FROM `transferencia` as t inner join registro as r ON t.id_registro=r.id_registro where correo='$user' ORDER BY t.id_registro DESC LIMIT 1;");
                        while ($fila = $consulta->fetch_array()) {
                        ?>    
                        <a href="../reminde/php/borrar_historial.php?email=<?php echo $fila['correo']; ?>&id=<?php echo $fila['id_registro']; ?>">Borrar Historial</a>
                        <?php } ?>
                    </div>
                    <?php
                    include './php/ht_co.php';
                    ?>
                    <?php
                    while ($fila = $consulta->fetch_array()) {
                    ?>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="<?php echo $fila['img_moneda']; ?>" alt="" style="width: 40px; height: 40px;">

                            <div class="w-100 ms-3">

                                <div class="d-flex w-100 justify-content-between">

                                    <h6 class="mb-0">Targeta utilizada: <?php echo $fila['numero_tarjeta']; ?></h6>
                                    <small>Realizada el <?php echo $fila['fecha']; ?></small>

                                </div>

                                <span>Transferencia realizada a la cuenta <b><?php echo $fila['num_cuenta']; ?></b></span> <br>
                                <span>monto transferido: <b><?php echo $fila['simbolo']; ?> <?php echo $fila['monto']; ?></b></span>


                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
            </div>

            </div>

            </div>
        <?php } ?>
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>