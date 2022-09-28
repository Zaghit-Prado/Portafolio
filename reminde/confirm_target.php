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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
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
            --md: 16px;
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
            /*Buenas prácticas para los atributos en css
            Posicionamiento
            Box Model
            Tipografía
            Visuales
            Otros */
            display: grid;
            place-items: center;

            width: 100%;
            height: 100vh;
        }

        .form-container {
            display: grid;
            justify-items: center;

            grid-template-rows: auto 1fr auto;
            width: 330px;
            /*Otra alternativa para centrar y sea responsive design
            .form-container {
                display: grid;
                justify-items: center;
                max-width: 400px;
                width: 90%;
            }*/
        }

        .logo {
            justify-self: center;

            width: 120px;
            margin-bottom: 40px;
        }

        .title {
            text-align: center;

            margin-bottom: 12px;
            color: var(--white);

            font-size: var(--big-lg);
        }

        .subtitle {
            text-align: center;
            margin-top: 0;
            margin-bottom: 32px;

            color: var(--label);

            font-size: var(--md);
            font-weight: 300;
        }

        .email-image {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 24px;

            width: 132px;
            height: 132px;
            background-color: var(--text-input-field);
            border-radius: 50%;
        }

        .email-image img {
            width: 80px;
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
            margin-bottom: 30px;
        }

        .resend {
            font-size: var(--sm);
        }

        .resend span {
            color: var(--label)
        }

        .resend a {
            color: var(--primary-button);
            text-decoration: none;
        }

        @media (max-width: 640px) {}
    </style>
</head>

<body>
    <div class="login">
        <div class="form-container">
            <a href="./home.html">
                <img src="./assets/img/logo-gh.svg" alt="Logo" class="logo">
            </a>

            <h1 class="title">Se agrego targeta exitosamente</h1>
            <p class="subtitle">Porfavor verifica su targeta en el inicio</p>

            <div class="email-image">
                <img src="https://images.vexels.com/media/users/3/129923/isolated/preview/23c69d5178087b811dd1196cf6274613-icono-de-tarjetas-de-credito.png" alt="email">
            </div>
            <?php   
include('Global/conexion.php');
 global $user;
 $user = $_GET['email'];
 $consulta = $conexion->query("SELECT * FROM `registro` where correo='$user';");
    while ($fila = $consulta->fetch_array()) {
?>
                <a href="home.php?email=<?php echo $fila['correo']; ?>" class="btn btn-success">
                    Ir a inicio</a>
                    <?php } ?>           
            <p class="resend">
                <span>¿Quiere agregar otra targeta?</span>
                <a href="add-credit-card.php">Registrar targeta</a>
            </p>
        </div>
    </div>
</body>

</html>