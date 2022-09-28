<nav>
    <img src="	https://assets.stickpng.com/images/588a64e0d06f6719692a2d10.png" width="40" height="40" alt="menu-mobile" class="menu-mobile">

    <!-- Dividimos nuestro nav en 2 partes : Parte Left y parte rigth -->
    <div class="navbar-left">
        <?php
        include('./Global/conexion.php');
        global $user;
        $user = $_GET['email'];
        $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
        while ($fila = $consulta->fetch_array()) {
        ?>
            <a href="./home.php?email=<?php echo $fila['correo']; ?>">
                <img src="./assets/img/logos/logo.svg" alt="logo" class="logo">
            </a>

            <ul>
                <li>

                    <a href="./add-reminder.php?email=<?php echo $fila['correo']; ?>">Agregar Recordatorio</a>

                </li>

                <li>
                <?php
                            global $user;
                            $user = $_GET['email'];
                            $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                            while ($fila = $consulta->fetch_array()) {
                            ?>

                                <a href="./transferencias.php?email=<?php echo $fila['correo']; ?>"> Tranferencias</a>
                            <?php
                            }
                            ?>
                </li>

                <!-- <li>
                    <div class="dropdown">
                        <span>Reportes</span>
                        <div class="dropdown-content">
                            <a href="">Historial</a>
                        </div>
                    </div>
                </li> -->
            </ul>
        <?php
        }
        ?>
    </div>

    <div class="navbar-right">
        <ul>
            <li class="navbar-email">
                <div class="nav-dropdown">
                    <?php
                    include('./Global/conexion.php');
                    global $user;
                    $user = $_GET['email'];
                    $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                    while ($fila = $consulta->fetch_array()) {
                    ?>
                        <input type="hidden" value="<?php echo $fila['correo']; ?>" name="name">
                        <span>Bienvenido <?php echo $fila['username']; ?></span>
                        <div class="nav-dropdown-content">
                            <a href="my_account.php?username=<?php echo $fila['username']; ?>">Editar cuenta</a>

                            <a href="./logou.php?email=<?php echo $fila['correo']; ?>">Cerrar Seccion</a>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </li>


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
                                        <a href="#" class="dropdown-item">

                                            <h5 class="fw-normal mb-0" style="color: #000;">
                                                Recordatorio Vencido
                                            </h5>
                                            <h5 class="fw-normal mb-0" style="color: #000;">
                                                Nombre : <?php echo $fila['descripcion']; ?>
                                            </h5>
                                            
                                        </a>
                                        <hr class="dropdown-divider">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
            </div>

        </ul>

    </div>
</nav>