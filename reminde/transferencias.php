<?php include('Global/conexion.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importamos las fuentes de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <!-- cierre importe de fonts -->
    <link rel="icon" type="image/x-icon" href="./assets/img/logos/logo.svg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/3ffaa30c0f.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/add-remainder/add-remainder.css">
    <link rel="stylesheet" href="./assets/css/nav/navbar1.css">
    <link rel="stylesheet" href="assets/css/css/style1.css">

    <title>Econmic Rat | Tranferencias</title>

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
            text-decoration: none;
        }

        body {
            margin: 0;

            background: var(--bg);
            color: var(--label);

            font-family: 'Quicksand', sans-serif;
        }

        .tranferecias {
            width: 100vw;
            height: 100vh;
        }

        .tranferecias-container {
            display: grid;
            place-items: center;

            width: 300px;
            width: auto;
        }

        .title {
            margin-bottom: 48px;
            color: var(--white);

            font-size: var(--big-lg);
        }

        .tranferencias-info {
            display: grid;
            grid-template-columns: auto auto auto;
            align-items: center;
        }

        .tranferencias-info p {
            display: flex;
            flex-direction: column;
        }

        .tranferencias-info p span:nth-child(1) {
            color: var(--hospital-green);
            margin-bottom: 12px;

            font-size: var(--lg);
        }

        .tranferencias-info p span:nth-child(2) {
            color: var(--label);
            font-size: var(--md);
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

    <section class="tranferecias">
        <div class="tranferecias-container">
            <h1 class="title">
                Transferencias
            </h1>
            <?php
                include('Global/conexion.php');
                global $user;
                $user = $_GET['email'];
                $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
                while ($fila = $consulta->fetch_array()) {
            ?>          
                    <a href="./transferir.php?email=<?php echo $fila['correo']; ?>">
                        <div class="tranferencias-info">
                        <!-- img tamaño : 50 * 50 -->
                        <figure>
                            <img src="https://img.icons8.com/external-becris-lineal-becris/50/4a90e2/external-transfer-money-banking-becris-lineal-becris.png" />
                        </figure>

                        <p>
                            <span>Tranferir a cuenta bancaria</span>
                            <span>Transfiera fondos de saldo de su cuenta a otra cuenta</span>
                        </p>

                        <figure>
                            <img src="https://img.icons8.com/windows/50/4a90e2/circled-chevron-right.png" />
                        </figure>
                    </div>
                </a>
            <?php  } ?>

        </div>
    </section>
    <?php } ?>
    <?php } ?>
    <script src="js/main.js"></script>

</body>

</html>