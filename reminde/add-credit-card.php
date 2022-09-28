<?php include('Global/conexion.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economic Rat | Agregar tarjeta</title>
    <link rel="icon" type="image/x-icon" href="img/logo-gh.svg">

    <!-- importamos las fuentes de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <!-- cierre importe de fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/3ffaa30c0f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/pagos.css">
    <link rel="stylesheet" href="./assets/css/add-remainder/add-remainder.css">
    <link rel="stylesheet" href="./assets/css/nav/navbar1.css">
    <link rel="stylesheet" href="./assets/css/nav/notif.css">
    <link rel="stylesheet" href="./assets/css/target.css">

</head>

<body>
    <?php
    global $user;
    $user = $_GET['email'];
    $consulta = $conexion->query("SELECT * FROM `usuario` where correo='$user';");
    while ($fila = $consulta->fetch_array()) {
    ?>
        <?php if ($fila['correo'] < null) { ?>


        <?php } else { ?>

            <header>
                <?php include('../reminde/php/nav.php') ?>
            </header>

            <!-- END NAVBAR -->



            <section>
                <div class="left">
                    <div class="left-container">
                        <img src="https://i.ibb.co/xFpx6xh/pexels-anete-lusina-6353683.jpg" alt="image" class="left-image">

                        <h1 class="title title-left">Haz transferencias sin contacto con tu banco</h1>

                        <p>Añade una tarjeta para empezar a hacer transferencias de forma más rápida y segura.</p>

                        <div class="button-container">
                            <a href="./transferencias.php">
                                <button class="primary-button">Hacer una transferencia</button>
                            </a>
                        </div>
                    </div>
                </div>




                <div class="right">
                    <div class="right-container">
                        <div class="add-credit-card">

                            <!-- CREDIT CARD -->

                            <div class="container">
                                <div class="row">
                                    <div class="col1">
                                        <div class="card">
                                            <div class="front">
                                                <div class="type">
                                                    <img class="bankid" />
                                                </div>
                                                <span class="chip"></span>
                                                <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF;
                                                    &#x25CF;&#x25CF;&#x25CF;&#x25CF;
                                                    &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
                                                <div class="date"><span class="date_value">MM / YYYY</span></div>
                                                <span class="fullname">Nombre</span>
                                            </div>
                                            <div class="back">
                                                <div class="magnetic"></div>
                                                <div class="bar"></div>
                                                <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
                                                <span class="chip"></span><span class="disclaimer">This card is property of Team Rats.
                                                    <br> If found please return to Team Rats Bank - 21968 Paris, Verdi Street, 34
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col2">
                                        <form action="../reminde/php/Ejecucion.php" method="POST">
                                            <?php
                                            global $user;
                                            $user = $_GET['email'];
                                            $sql = "SELECT * FROM `registro` where correo='$user'";
                                            $res = mysqli_query($conexion, $sql);
                                            while ($fila = mysqli_fetch_array($res)) { ?>
                                                <input name="email" class="text" type="hidden" value="<?php echo $fila['id_registro']; ?>" />
                                                <input name="email2" class="text" type="hidden" value="<?php echo $fila['correo']; ?>" />

                                                <label>Número de tarjeta</label>
                                                <input name="NUMTARG" class="number" type="text" ng-model="ncard" maxlength="19" pattern="{19,19}" placeholder="●●●● ●●●● ●●●● ●●●●" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required />
                                                <label>Titular de la tarjeta</label>
                                                <input name="TITULAR" class="inputname" type="text" placeholder="" maxlength="20" pattern="[a-zA-Z ]{10,20}" required />
                                            <?php } ?>
                                            <label>Fecha de Vencimiento</label>
                                            <input name="FCH" class="expire" type="text" placeholder="MM / YYYY" maxlength="9" minlength="9" pattern="{9,9}" required />
                                            <label>Marca de Targeta</label>


                                            <select name="Tarjeta" class="colortarget">
                                                <?php
                                                $sql = "SELECT * FROM `marca_targeta`";
                                                $res = mysqli_query($conexion, $sql);
                                                while ($fila = mysqli_fetch_array($res)) { ?>
                                                    <option value="<?php echo $fila['id_targ_mar']; ?>"><?php echo $fila['marca']; ?></option>
                                                <?php } ?>
                                            </select>

                                            <label>CVV</label>
                                            <input name="CVV" class="ccv" type="text" minlength="3" placeholder="***" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required />
                                            <label>Tipo de moneda</label>
                                            <select name="id_moneda" class="colortarget">
                                                <?php
                                                $sql = "SELECT * FROM `monedas`";
                                                $res = mysqli_query($conexion, $sql);
                                                while ($fila = mysqli_fetch_array($res)) { ?>
                                                    <option value="<?php echo $fila['id_moneda']; ?>"><?php echo $fila['moneda']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <label>Ahorros Actuales</label>
                                            <script src="assets/js/moneda.js"></script>
                                            <input name="Ahorros" type="text" maxlength="7" id="moneda_nac" placeholder="*100.50" onkeypress="return filterFloat(event,this)" style="width: 120px;" />
                                            <button type="submit" name="Ejec_targeta" class="buy">Agregar tarjeta</button>
                                            <button style="width: 260px;
                                            height: 50px;
                                            position: relative;
                                            display: block;
                                            margin: 20px auto;
                                            border-radius: 10px;
                                            font-size: 20px;" type="submit" name="Edit_targeta" class="btn btn-outline-light">Editar Targeta</button>

                                        </form>
                                        
                                    </div>
                                </div>
                            </div>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
                            <script src="./assets/js/targeta.js"></script>

                        </div>
                    </div>
                </div> 
            </section>

        <?php } ?>
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>