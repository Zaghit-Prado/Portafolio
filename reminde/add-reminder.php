<?php include('Global/conexion.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="" content="Ésta página trata sobre ...">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Remix Zapata, Perú, Estudiante" />
    <meta name="author" content="Remix Zapata" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Economic Rats | Agregar Recordatorio</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logos/logo.svg">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/3ffaa30c0f.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/add-remainder/add-remainder.css">
    <link rel="stylesheet" href="./assets/css/nav/navbar1.css">
    <link rel="stylesheet" href="./assets/css/nav/notif.css">

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

            <main>
                <section class="login">
                    <article class="form-container">
                        <h1 class="title">Agrega un recordatorio</h1>

                        <form action="../reminde/php/Ejecucion.php" class="form" method="POST">
                            <div>
                                <?php
                                include('Global/conexion.php');
                                global $user;
                                $user = $_GET['email'];
                                $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                                while ($fila = $consulta->fetch_array()) {
                                ?>                                    
                                <input name="correo" type="hidden" value="<?php echo $fila['correo']; ?>">
                                <input name="fullname" type="hidden" value="<?php echo $fila['id_registro']; ?>">

                                <?php
                                }
                                ?>
                                <label for="fecha" class="label">
                                    <span class="form__text">Fecha</span>
                                    <input type="date" id="fecha" name="fecha" class="input input-date" required>
                                </label>

                                <label for="type" class="label">Categoría</label>
                                <select name="cate" id="type" class="input ">
                                    <?php
                                    //creo una consulta sql
                                    $query = "SELECT * FROM `recordatorio_tipo`;";

                                    // ejecuto la consulta y lo guardo en una variable llamada regions
                                    $types = mysqli_query($conexion, $query);

                                    while ($row = mysqli_fetch_assoc($types)) { ?>

                                        <option value="<?php echo $row["id_categoria"]; ?>"><?php echo $row["tipo"]; ?></option>

                                    <?php } ?>
                                </select>

                                <label for="description" class="label">
                                    <span class="form__text">Descripción</span>
                                    <input type="text" id="description" class="input input-description" placeholder="*Pagar Spotify" name="descripcion" required>
                                </label>

                                <label for="payment" class="label">Forma de pago</label>
                                <select name="payment" id="payment" class="input ">
                                    <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                                    <option value="Bancos">Bancos</option>
                                    <option value="Pago en efectivo">Pago en efectivo</option>
                                </select>

                                <input type="hidden" id="frequencia" value="Activo hasta el día indicado" name="frequencia">

                                <label for="amount" class="label">
                                    <span class="form__text">Monto</span>
                                    <input type="number" pattern="[0-9]" type="number" step="0.01" id="amount" name="monto" class="input input-amount" placeholder="*100.50" required>
                                </label>
                            </div>

                            <input type="submit" name="sub_record" value="Crear Recordatorio" class="primary-button login-button" id="add_reminder">
                        </form>
                </section>
            </main>
        <?php } ?>
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>