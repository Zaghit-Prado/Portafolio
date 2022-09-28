<?php
include 'Global/conexion.php';
include "php/borr_recor.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Economic Rats | Home</title>
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
    <link rel="stylesheet" href="css/home2.css">
    <link rel="stylesheet" href="assets/css/css/Yoda1.css">
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/mandalore">
    <link rel="stylesheet" href="assets/css/css/Stylhom.css">

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
            <div class="row" style="--bs-gutter-x: 0rem;">

                <div class="col-xs-12 col-md-6" style="width: 64%; z-index: 1;">
                    <section class="all-remainders">
                        <h3 class="title">Recordatorios de pagos</h3>
                        <!-- Sale & Revenue Start -->
                        <article class="cards-container">
                            <?php
                            include('php/Recor.php');
                            while ($fila = $consulta->fetch_array()) {
                            ?>
                                <div class="remainder-card" style="width: 170px;">
                                    <p class="fecha"><?php echo $fila['fecha_final']; ?></p>
                                    <div class="remainder-info">
                                        <div>
                                            <!--span><i class="fa fa-user"></i></span-->
                                            <!--cliente-->
                                            <span><i class="fa fa-tags"></i> <?php echo $fila['tipo']; ?></span>
                                            <!--tipo-->
                                            <span><i class="fa fa-pencil-square-o"></i> <?php echo $fila['descripcion']; ?></span>
                                            <!--titulo-->
                                            <span><i class="fa fa-money"></i> <?php echo $fila['modo_de_pago']; ?></span>
                                            <!--modo-->
                                            <span><i class="fa fa-calendar-check-o"></i> <?php echo $fila['frecuencia']; ?></span>
                                            <!--fecha-recordatorio-->
                                            <p style="height: 40px;">
                                                S./<?php echo $fila['monto']; ?>

                                            </p> 

                                        </div>
                                        <div class="dropdown" style="margin-top: -33px; margin-left: 147px;">
                                            <a class="cambioColor"  style="width: 2px;" href="#" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i  class="fa fa-ellipsis-v" style="
                                        font-size: 20px;"></i>
                                            </a>
                                            
                                            <ul style="background-color: #141619;" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                                <li><a class="dropdown-item coloro" href="../reminde/php/elim_record.php?id=<?php echo $fila['id_recordatorio']; ?>&correo=<?php echo $fila['correo']; ?>"><i  class="fa fa-trash-o" ></i> Quitar de Recordatorios</a></li>
                                            </ul>
                                        </div>
                                        
                                        
                                    </div>

                                </div>

                            <?php } ?>

                        </article>
                    </section>
                </div>
                <div class="col-xs-12 col-md-6" style="width: 34%">
                    <section>
                        <div class="baby-yoda-container" style=" margin-top: 100px; align-items: flex-end;">
                            <div class="ship">
                                <div class="force-container">
                                    <div class="baby-yoda">
                                        <div class="head">
                                            <div class="face">
                                                <div class="ears">
                                                    <div class="ear left"></div>
                                                    <div class="ear right"></div>
                                                </div>
                                                <div class="eyes">
                                                    <div class="eye"></div>
                                                    <div class="eye"></div>
                                                </div>
                                                <div class="nose"></div>
                                            </div>
                                        </div>
                                        <div class="scarf"></div>
                                    </div>
                                    <div class="front-ship">
                                        <div class="top"></div>
                                        <div class="bottom">
                                            <h2 class="titlee">
                                                <span>The</span>
                                                Mandalorian
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ship-shadow"></div>
                        </div>
                    </section>
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