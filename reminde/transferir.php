<?php include('Global/conexion.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Economic Rat | Tranferencia</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo-gh.svg">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/3ffaa30c0f.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/add-remainder/add-remainder.css">
    <link rel="stylesheet" href="./assets/css/nav/navbar1.css">
    <link rel="stylesheet" href="./assets/css/nav/notif.css">
    <link rel="stylesheet" href="assets/css/css/style1.css">



    <style>
        :root {

            /* ----- COLORS ----- */
            --very-ligth-pink: #C7C7C7;
            --text-input-field: #010409;
            --hospital-green: #ACD9B2;

            /* ----- BACKGROUND COLOR ----- */
            --bg: #0D1117;
            --bd-navbar: #161B22;

            /* ----- LABELS COLOR ----- */
            --white: #FFFFFF;
            --black: #000000;
            --dark: #232830;
            --label: #C9D1D9;

            /* ----- COLORS BUTTON ----- */
            --primary-button: #2EA043;
            --secondary-button: #30363D;

            /* ----- FONT SIZE ----- */
            --sm: 12px;
            --md: 15px;
            --lg: 18px;
            --big-lg: 24px;
        }

        * {
            color: var(--label);
        }

        body {
            margin: 0;

            background: var(--bg);

            font-family: 'Quicksand', sans-serif;
        }

        .login {
            display: grid;
            place-items: center;

            width: 100%;
            height: 100vh;
        }

        .form-container {
            display: grid;

            grid-template-rows: auto 1fr auto;
            width: 350px;
        }

        .title {
            text-align: start;
            margin-bottom: 42px;
            margin-top: 0;
            color: var(--white);
            text-align: center;

            font-size: var(--big-lg);
        }

        .form {
            display: flex;
            flex-direction: column;
        }

        .form div {
            display: flex;
            flex-direction: column;
        }

        .label {
            margin-bottom: 4px;
            color: var(--label);

            font-size: var(--md);
            font-weight: bold;
        }

        .input {
            padding: 6px;

            background-color: var(--text-input-field);
            border: none;
            border-radius: 8px;
            height: 30px;
            margin-bottom: 24px;
            color: var(--label);

            font-size: var(--md);
        }

        ::placeholder {
            color: var(--label);
        }

        .subtitle {
            color: var(--very-ligth-pink);

            font-size: var(--sm);
        }

        .subtitle:hover {
            color: var(--white);
        }

        .subtitle-account-number {
            margin-top: 0;
            margin-bottom: 12px;
        }

        .select {
            background-color: var(--text-input-field);
            border-radius: 8px;
            height: 40px;
            margin-bottom: 24px;
            color: var(--label);
            border: none;

            font-size: var(--md);
        }

        .primary-button {
            background-color: var(--primary-button);
            border: none;
            border-radius: 8px;
            color: var(--white);
            width: 100%;
            height: 40px;
            cursor: pointer;

            font-size: var(--md);
            font-weight: bold;
        }

        .primary-button:hover {
            background-color: #42ce5b;
        }

        .login-button {
            margin-top: 14px;
            margin-bottom: 15px;
        }

        .subtitle-message {
            text-align: center;
        }

        @media (max-width: 640px) {
            .form-container {
                height: 100%;
            }

            .form {
                height: 100%;
                justify-content: space-between;
            }
        }
    </style>

</head>

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

        <body>

            <div class="login">
                <div class="form-container">
                    <h1 class="title">Tranferencia</h1>

                    <?php
                    include('Global/conexion.php');
                    global $user;
                    $user = $_GET['email'];
                    $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                    while ($fila = $consulta->fetch_array()) {
                    ?>
                        <form action="../reminde/php/Ejecucion.php" class="form" method="POST">
                        <?php  } ?>

                        <div>
                            <!--Asociar el email para las consultas-->
                            <?php
                            include('Global/conexion.php');
                            global $user;
                            $user = $_GET['email'];
                            $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                            while ($fila = $consulta->fetch_array()) {
                            ?>
                                <input name="correo" type="hidden" value="<?php echo $fila['correo']; ?>">
                                <input name="id" type="hidden" value="<?php echo $fila['id_registro']; ?>">

                            <?php } ?>

                            <!--Empezamos La Transferencia-->
                            <label for="account-number" class="label">Número de cuenta</label>
                            <p class="subtitle subtitle-account-number">Por lo general tarda de 1 a 3 días hábiles
                                <br /> (Sujeto al pago de comisiones)
                            </p>

                            <input name="accountnumber" id="account-number" class="input input-account-number" type="text" ng-model="ncard" maxlength="16" pattern="{16,16}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>

                            <label for="money" class="label">Moneda</label>
                            <select name="money" id="money" class="select">
                                <?php
                                $query = "SELECT * FROM `monedas`;";
                                $types = mysqli_query($conexion, $query);

                                while ($row = mysqli_fetch_assoc($types)) { ?>

                                    <option value="<?php echo $row["id_moneda"]; ?>"><?php echo $row["moneda"]; ?></option>

                                <?php } ?>
                            </select>

                            <label for="monto" class="label">Monto</label>
                            <input name="monto" type="number" class="input input-name" pattern="[0-9]" type="number" step="0.01" id="amount" placeholder="*100.50" maxlength="7" id="moneda_nac" onkeypress="return filterFloat(event,this)" required>
                            <label for="origen" class="label">Origen</label>
                            <select name="origen" id="origen" class="select">
                                <?php
                                include('php/tra.php');
                                while ($row = mysqli_fetch_assoc($types)) { ?>

                                    <option value="<?php echo $row["id_tarjeta"]; ?>"><?php echo $row["marca"]; ?>ㅤ/ㅤ<?php echo $row["numero_tarjeta"]; ?>ㅤ/ㅤ<?php echo $row["simbolo"]; ?> <?php echo $row["monto_ahorros"]; ?></option>
                                    

                                <?php } ?>

                            </select>
                           

                        </div>

                        <input type="submit" name="Siguiente" value="Siguiente" class="primary-button login-button">

                        <p class="subtitle subtitle-message">
                            Los tiempos de las transferencias son estimados. Todas las transferencias están sujetas a revisión y podrían retrasarse o detenerse si nosotros o su banco identificamos algún problema.
                        </p>

                        </form>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/main.js"></script>
        </body>

</html>