<?php include('Global/conexion.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Economic Rat | Validación de datos</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo-gh.svg">
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
    <link rel="stylesheet" href="./assets/css/nav/notifi.css">

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

        .origen {
            color: var(--hospital-green);
            margin-bottom: 20px;
            
            font-weight: bold;
            font-size: var(--lg);
        }

        .label {
            margin-bottom: 8px;
            color: var(--label);

            font-size: var(--md);
            font-weight: bold;
        }

        .account {
            margin-bottom: 40px;
            font-size: var(--md);
        }

        .label:hover ,
        .account:hover {
            color: var(--white);
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

    <div class="login">
        <div class="form-container">
            <h1 class="title">Validación de cuentas</h1>
            <?php
            include('Global/conexion.php');
            global $user;
            $user = $_GET['email'];
            $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
            while ($fila = $consulta->fetch_array()) {    
            ?>     
                <div class="form">     
                    <div>
                        <label class="origen">Origen</label>
                        <label class="origen"><?php echo $fila['correo']; ?></label>

            <?php  } ?> 
            <?php
            include('Global/conexion.php');
            global $user;
            $user = $_GET['email'];
            $consulta = $conexion->query("SELECT tr.id_tra,tr.num_cuenta,r.correo,t.numero_tarjeta FROM `transferencia` as tr INNER JOIN registro as r ON tr.id_registro=r.id_registro INNER JOIN tarjetas as t ON t.id_tarjeta=tr.id_origen where correo='$user' ORDER BY id_tra DESC LIMIT 1;");
            while ($fila = $consulta->fetch_array()) {    
            ?>
                            
                    <label class="account"><?php echo $fila['numero_tarjeta']; ?></label>
            
                    <label class="origen">Destino</label>

                    <label class="account"><?php echo $fila['num_cuenta']; ?></label>
            <?php  } ?> 
                </div>
                <?php
            include('Global/conexion.php');
            global $user;
            $user = $_GET['email'];
            $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
            while ($fila = $consulta->fetch_array()) {    
            ?>    
                <a style="color:#FFFFFF" href="home.php?email=<?php echo $fila['correo']; ?>"><button type="submit" value="Siguiente" class="primary-button login-button"> Siguiente</a>
                
            <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php } ?>
</body>

</html>