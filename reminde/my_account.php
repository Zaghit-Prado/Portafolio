<?php include("Global/conexion.php");
global $username;
$username = $_GET['username'];
$query = "SELECT r.fullname, r.correo, r.password, r.username, p.pais, r.id_pais  FROM registro as r INNER JOIN paises as p ON r.id_pais = p.id_pais where username='$username'; ";
$datas = mysqli_query($conexion, $query);
$row = mysqli_fetch_assoc($datas);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importamos las fuentes de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <!-- cierre importe de fonts -->
    <link rel="shortcut icon" href="./frontend-developer/logos/favicon_bota_fora.svg" type="img">
    <title>Create account</title>
    <style>
        :root {
            /* ----- COLORS ----- */
            --very-ligth-pink: #C7C7C7;
            --text-input-field: #010409;
            --hospital-green: #ACD9B2;

            /* ----- BACKGROUND COLOR ----- */
            --bg: #010409;
            --bg-navbar: #161B22;

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
            --big-lg: 25px;
        }

        body {
            margin: 0;

            font-family: 'Quicksand', sans-serif;

            background-color: var(--bg);
            color: var(--label);
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
            width: 300px;
        }

        .title {
            text-align: start;

            margin-bottom: 42px;

            font-size: var(--lg);

            color: var(--hospital-green);
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

            font-size: var(--sm);
            font-weight: bold;

            color: var(--white);
        }

        .value {
            /*Aquí le voy dando margin a todo, y va de orden: arriba - derecha - abajo - izquierda   --- Como si fuera un reloj*/
            margin: 8px 0 32px 0;
            padding: 5px;
            border: 1px solid var(--dark);

            font-size: var(--md);

            color: var(--label);
            background-color: var(--text-input-field);
            border-radius: 6px;
        }

        .secondary-button {
            width: 100%;
            height: 40px;
            border: 1px solid transparent;
            border-radius: 8px;
            cursor: pointer;

            font-size: var(--md);
            font-weight: bold;

            background-color: var(--dark);
            color: var(--white);
        }

        .secondary-button:hover {
            background-color: var(--secondary-button);
        }

        .login-button {
            margin-top: 14px;
            margin-bottom: 30px;
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
    <div class="login">
        <div class="form-container">
            <h1 class="title">Mi cuenta</h1>

            <form action="../reminde/php/Ejecucion.php?username=<?php echo $username; ?>" method="POST" class="form">
                <div>
                    <label for="fullname" class="label">Nombre Completo</label>
                    <input type="text" name="fullname" class="value" value="<?php echo $row["fullname"]; ?>" id="fullname" required maxlength="24" minlength="9" pattern="{9,9}">

                    <label for="email" class="label">Correo electrónico</label>
                    <input type="text" name="email" class="value" value="<?php echo $row["correo"]; ?>" id="email" maxlength="35" minlength="9" pattern="{9,9}">

                    <label for="password" class="label">Contraseña</label>
                    <input type="text" name="password" class="value" value="<?php echo $row["password"]; ?>" id="password" required maxlength="30" minlength="9" pattern="{9,9}">

                    <label for="username" class="label">Nombre de usuario</label>
                    <input type="text" name="username" class="value" value="<?php echo $row["username"]; ?>" id="username" required maxlength="30" minlength="4" pattern="{9,9}">

                    <label for="country" class="label">País</label>
                    <select name="country" id="country" name="country"  class="value" required maxlength="16" minlength="2" pattern="{9,9}">
                    <option value="<?php echo $row['id_pais'];?>" selected><?php echo $row["pais"]; ?></option>
                    <?php
        include('Global/conexion.php');
        $consulta = $conexion->query("SELECT * FROM `paises`;");
        while ($fila = $consulta->fetch_array()) {
        ?>      
                        <option value="<?php echo $fila['id_pais'];?>"><?php echo $fila['pais'];?></option>
           <?php  
                    }
                    ?>
                    </select>
                </div>

                <input type="submit" name="edit_cuenta" value="Guardar" class="secondary-button login-button">
            </form>
        </div>
    </div>
</body>

</html>