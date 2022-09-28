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
    <!-- cierre importe de fonts -->
    <!-- <link rel="stylesheet" href="./assets/css/navbar.css"> -->
    <title>Economic Rats | Verificacion</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
    <div class="login">
        <div class="form-container">
            <!-- <img src="./assets/img/logos/logo_yard_sale.svg" alt="Logo" class="logo"> -->
            <img alt="Logo" src="./assets/img/logos/logo-gh.svg" class="logo"/>
            <?php 
                include('Global/conexion.php');
                global $user;
                $user = $_GET['user'];
                $consulta = $conexion->query("SELECT count(*) as cuentabi,correo FROM `usuario` where correo='$user';");
                   while ($fila = $consulta->fetch_array()) {
                ?>  
                <?php if ($fila['cuentabi'] < 2) { ?>
                <label for="email" class="label">¡Bienvenido <?php echo $fila['correo']; ?> Su cuenta a sido iniciada <?php echo $fila['cuentabi']; ?> vez!</label>
                <?php } else { ?>
                    <label for="email" class="label">¡Bienvenido <?php echo $fila['correo']; ?> Su cuenta a sido iniciada <?php echo $fila['cuentabi']; ?> veces!</label>

                        <?php } ?>
                
                <a href="home.php?email=<?php echo $fila['correo']; ?>" class="btn btn-success">Verificar e iniciar</a>
                <?php } ?>
        </div>
    </div>
</body>
</html>