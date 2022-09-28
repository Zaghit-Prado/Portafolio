<div class="container-xxl position-relative bg-white d-flex p-0">

    <div class="sidebar pe-4 pb-3">
        <nav class="navbar navbar-light">
            <STYLE>
                A {
                    text-decoration: none;
                }

                .money-info {
                    display: flex;
                    justify-content: space-around;
                    margin-top: 8px;
                    margin-bottom: 20px;
                    width: 100%;
                    height: auto;
                }

                .money-info-container {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    padding: 5px 0;
                    width: 100px;
                    background-color: var(--dark);
                    border-radius: 12px;
                }
            </STYLE>
            <div class="container">
                <?php

                global $user;
                $user = $_GET['email'];
                $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                while ($fila = $consulta->fetch_array()) {
                ?>
                    <a href="home.php?email=<?php echo $fila['correo']; ?>" class="navbar-brand mx-5">
                    <?php
                }
                    ?>
                    <h3 style="color:#ffffff;display: flex;
                        align-items: center;
                        justify-content: flex-end;
                        padding-left: 30px;">
                        <img src="img/logo.svg" alt="logo" class="logo" width="33%">Economic
                        Rats
                    </h3>
                    </a>

                    <section class="money-info">
                        <div class="col-xs-6">
                            <?php
                            global $user;
                            $user = $_GET['email'];
                            $sql = "SELECT e.correo, SUM(r.monto) AS Total FROM recordatorio as r INNER JOIN registro as e ON r.id_registro = e.id_registro where correo='$user';";
                            $res = mysqli_query($conexion, $sql);
                            while ($fila = mysqli_fetch_array($res)) { ?>


                                <p class="money-info-container">
                                    <span class="money-info__item money-info__item--dollar" style="color:#acd9b2;">S/ <?php echo $fila['Total']; ?></span>
                                    <span class="money-info__item money-info__item--type" style="color:#c9d1d9;">Total
                                        Record.</span>
                                </p>
                            <?php } ?>
                        </div>
                        <div class="col-xs-6">
                            <p class="money-info-container">
                            <?php
                            global $user;
                            $user = $_GET['email'];
                            $sql = "SELECT e.correo, SUM(t.monto_ahorros) AS Total FROM tarjetas as t INNER JOIN registro as e ON t.id_registro = e.id_registro where correo='$user';";
                            $res = mysqli_query($conexion, $sql);
                            while ($fila = mysqli_fetch_array($res)) { ?>
                                <span class="money-info__item money-info__item--dollar" style="color:#acd9b2;">$<?php echo $fila['Total']; ?></span>
                            <?php } ?>    
                                <span class="money-info__item money-info__item--type" style="color:#c9d1d9;">Ahorros</span>
                            </p>

                        </div>

                    </section>
                    <style>
                        .cambioColor {
                            color: #acacac;

                        }

                        /* Definimos el color al pasar el mouse por encima */
                        .cambioColor:hover {
                            color: rgb(255, 255, 255);
                        }

                        .dropbtn {
                            background-color: #ffffff00;
                            padding: 10px;
                            font-size: 21px;
                            border: none;
                            cursor: pointer;
                        }

                        .dropdown {
                            position: relative;
                            display: inline-block;
                        }

                        .dropdown-content {
                            display: none;
                            position: absolute;
                            background-color: #232830;
                            min-width: 250px;
                            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                            z-index: 1;
                            font-size: 20px;
                        }

                        .dropdown-content a {
                            color: white;
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;
                        }

                        .dropdown-content a:hover {
                            background-color: #f1f1f1
                        }

                        .dropdown:hover .dropdown-content {
                            display: block;
                        }

                        .dropdown:hover .dropbtn {
                            background-color: #3e8e4100;
                        }
                    </style>
                    <section class="transactions" style="
                                    padding-top: 0px;
                                    padding-right: 0px;
                                    padding-bottom: 0px;
                                    padding-left: 10px;">
                        <p class="transactions-info">
                            <img src="img/transactions_icon.svg" alt="icon for transactions">
                            <?php
                            include('Global/conexion.php');
                            global $user;
                            $user = $_GET['email'];
                            $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                            while ($fila = $consulta->fetch_array()) {
                            ?>
                                <a href="historial_tranf.php?email=<?php echo $fila['correo']; ?>" class="transactions__text" style="font-size: 17px;">Ver todas las
                                    Transferencias</a>
                            <?php
                            }
                            ?>
                        </p>
                    </section>
                    <div class="row g-4">

                        <div class="dropdown" style="
                                    padding-top: 0px;
                                    padding-right: 0px;
                                    padding-bottom: 5px;
                                    padding-left: 40px;
                                    z-index:2;">
                            <?php global $user;
                            $user = $_GET['email'];
                            $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                            while ($fila = $consulta->fetch_array()) { ?>
                                <a style="font-size:19px" class="dropbtn cambioColor" href="add-credit-card.php?email=<?php echo $user ?>"><i class="fa-solid fa-credit-card"></i> Tarjetas de
                                    crédito</a>
                            <?php } ?>
                            <div class="dropdown-content">
                                <style>
                                    .colorf {
                                        color: #fcfcfc;

                                    }

                                    .colorf:hover {
                                        color: #161b22;
                                    }
                                </style>
                                <?php
                                global $user;
                                $user = $_GET['email'];
                                $sql = "SELECT t.numero_tarjeta,t.id_targ_mar, r.correo, m.marca FROM tarjetas as t INNER JOIN registro as r ON t.id_registro = r.id_registro INNER JOIN marca_targeta as m ON m.id_targ_mar=t.id_targ_mar where correo='$user'";
                                $res = mysqli_query($conexion, $sql);
                                while ($fila = mysqli_fetch_array($res)) { ?>
                                    <ul class="dropdown-box" style="margin-bottom: 0rem; padding-left: 0rem;">
                                        <a align="center" class="dropdown-box__item colorf"><?php echo $fila['marca']; ?></a>
                                        <p align="center" class="dropdown-box__item dropdown-box__item--number"><?php echo $fila['numero_tarjeta']; ?></p>

                                    </ul>
                                    <hr style="color:#fff">
                                <?php } ?>
                            </div>
                        </div>

                        <div class="dropdown" style="
                          padding-top: 0px;
                          padding-right: 0px;
                          padding-bottom: 5px;
                          padding-left: 40px;
                          z-index:1;">

                            <?php
                            global $user;
                            $user = $_GET['email'];
                            $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                            while ($fila = $consulta->fetch_array()) {
                            ?>
                                <a style="font-size:19px" class="dropbtn cambioColor" href="add-reminder.php?email=<?php echo $fila['correo']; ?>">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Agregar Recordatorio</a>
                            <?php
                            }
                            ?>

                        </div>
                        <div class="dropdown" style="
                          padding-top: 0px;
                          padding-right: 0px;
                          padding-bottom: 5px;
                          padding-left: 40px;
                          z-index:1;">

                            <?php
                            global $user;
                            $user = $_GET['email'];
                            $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                            while ($fila = $consulta->fetch_array()) {
                            ?>

                                <a style="font-size:19px" class="dropbtn cambioColor" href="transferencias.php?email=<?php echo $fila['correo']; ?>"><i class="fa fa-exchange" aria-hidden="true"></i> Tranferencias</a>
                            <?php
                            }
                            ?>

                        </div>
                        <div class="dropdown" style="
                          padding-top: 0px;
                          padding-right: 0px;
                          padding-bottom: 0px;
                          padding-left: 50px;
                          z-index:1;">
                          <p style="font-size: 19px; color: #acacac;"><i class="fa fa-envelope"></i> Si tiene dudas, escribenos:</p>
                          <form action="https://formsubmit.co/economic_rats@outlook.com" method="POST">
                           
                           <?php
                           global $user;
                            $user = $_GET['email'];
                            $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                            while ($fila = $consulta->fetch_array()) {
                            ?>
                            <input type="email" name="email" value="<?php echo $fila['correo'] ?>" hidden="">
                            <?php } ?>
                           <textarea style="color: #ffffff;
                            background-color: #010409;font-size:15px;border: 0px;" type="text" name="messenger" placeholder="Escribe aqui..." class="form-control form-control-lg" minlength="10" maxlength="300" required></textarea>
                            <div style="padding-top: 8px;padding-left: 185px">
                            <button type="submit" class="btn btn-outline-light">Enviar <i class="fa fa-send"></i></button>
                            </div>
                        
                        </div>
                        <div style="padding-top: 345px;position: fixed;padding-left: 0px;width: 10px;">
                            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);width: 350px;FONT-VARIANT: JIS90;">
                                © 2022 Copyright:
                                <a class="text-white" href="https://chat.whatsapp.com/KOGHVKY0zFS9RtQxhMIWrx"> By.Team Rats</a>
                            </div>
                        </div>
                    </div>

            </div>

        </nav>

    </div>

    <!-- Sidebar End -->

    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand navbar-light sticky-top px-4 py-0" style="background-color:#161b22;">
            <a href="#" class="navbar-brand d-flex d-lg-none me-4">
                <img src="img/logo.svg" width="70%">
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0 cambioColor" style="background: #010409;">
                <i class="fa fa-bars"></i>
            </a>


            <div class="navbar-nav align-items-center ms-auto">

                <div class="nav-item dropdown">
                    <style>
                        .qty {
                            position: absolute;
                            right: 7px;
                            top: 1px;
                            width: 20px;
                            height: 20px;
                            line-height: 20px;
                            text-align: center;
                            border-radius: 50%;
                            font-size: 10px;
                            color: #FFF;
                            background-color: #1c111100;
                        }
                    </style>


                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell" style="
                            font-size: 20px;"></i>
                        <?php
                        global $user;
                        $user = $_GET['email'];

                        $consulta = $conexion->query("SELECT color,SUM(num) AS noti  FROM `notif` WHERE correo = '$user';");
                        while ($fila = $consulta->fetch_array()) {
                        ?>
                            <div class="qty" style="background-color: <?php echo $fila['color']; ?>;"><?php echo $fila['noti']; ?></div>
                        <?php
                        }
                        ?>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <?php
                        global $user;
                        $user = $_GET['email'];
                        $consulta = $conexion->query("SELECT * FROM `notif` WHERE correo = '$user';");
                        while ($fila = $consulta->fetch_array()) {
                        ?>
                            <a href="../reminde/php/elim_noti.php?correo=<?php echo $fila['correo']; ?>&id=<?php echo $fila['id']; ?>" class="dropdown-item">

                                <h6 class="fw-normal mb-0">
                                    Recordatorio Vencido
                                </h6>
                                <h6 class="fw-normal mb-0">
                                    Nombre : <?php echo $fila['descripcion']; ?>
                                </h6>

                            </a>
                            <hr class="dropdown-divider">
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <?php
                    include('Global/conexion.php');
                    global $user;
                    $user = $_GET['email'];
                    $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                    while ($fila = $consulta->fetch_array()) {
                    ?>
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/<?php echo $fila['foto']; ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $fila['username']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-dark border-0 rounded-0 rounded-bottom m-0">
                            <style>
                                .coloro {
                                    color: #fcfcfc;

                                }

                                .coloro:hover {
                                    color: rgb(0, 0, 0);
                                }
                            </style>
                            <a class="dropdown-item coloro" href="my_account.php?username=<?php echo $fila['username']; ?>">Editar cuenta</a>
                            <a class="dropdown-item coloro" href="logou.php?email=<?php echo $fila['correo']; ?>">Cerrar Seccion</a>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </nav>
        <div class="">