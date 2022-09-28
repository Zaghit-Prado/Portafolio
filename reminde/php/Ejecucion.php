<?php
if (isset($_POST['sub_record'])) {
    include '../Global/conexion.php';
    $fecha_final = $_POST['fecha'];
    $correo = $_POST['correo'];
    $fullname = $_POST['fullname'];
    $categoria = $_POST['cate'];
    $descripcion = $_POST['descripcion'];
    $modo_de_pago = $_POST['payment'];
    $frecuencia = $_POST['frequencia'];
    $monto = $_POST['monto'];
    $query = "INSERT INTO recordatorio(fecha_final,id_registro,id_categoria,descripcion,modo_de_pago,frecuencia,monto) values('$fecha_final','$fullname','$categoria','$descripcion','$modo_de_pago','$frecuencia','$monto')";
    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar) {

        header("location:../home.php?email=$correo");
    } else {
        echo '
        <script>
        alert("NO se pudo agregar targeta, intentalo nuevamente")
        </script>';
        header("location:../home.php?email=$correo");
    }
    mysqli_close($conexion);
}
?>
<?php
if (isset($_POST['Siguiente'])) {
    include("../Global/conexion.php");

    $correo = $_POST['correo'];
    $id = $_POST['id'];
    $accountnumber = $_POST['accountnumber'];
    $money = $_POST['money'];
    $monto = $_POST['monto'];
    $origen = $_POST['origen'];

    $query = "INSERT INTO `transferencia`(id_registro,num_cuenta,id_moneda,monto,id_origen) values ('$id','$accountnumber','$money','$monto','$origen')";
    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar) {
        $transf = "UPDATE tarjetas INNER JOIN transferencia ON tarjetas.id_tarjeta = transferencia.id_origen SET tarjetas.monto_ahorros = tarjetas.monto_ahorros - transferencia.monto where id_origen='$origen' ;";
        $complete = mysqli_query($conexion, $transf);
        header("location:../validacion_de_datos.php?email=$correo");
    } else {
        echo '
        <script>
        alert("NO se pudo realizar la tranferencia")
        </script>';
        header("../validacion_de_datos.php?email=$correo");
    }
    mysqli_close($conexion);
}
?>
<?php
if (isset($_POST['registrar'])) {
    include("../Global/conexion.php");
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['username']) >= 1) {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $username = trim($_POST['username']);
        $country = $_POST['country'];
        $foto = trim($_POST['foto']);

        $consulta = "INSERT INTO registro(fullname, correo, password, username,id_pais,foto) VALUES ('$name','$email','$password','$username','$country','$foto')";
        $verificar_correo=mysqli_query($conexion, "SELECT * FROM `registro` where correo='$email'");
        if(mysqli_num_rows($verificar_correo) > 0){
            echo'
            <script>
            alert("Esta cuenta ya a sido registrada, Intenta otro diferente");
            window.location.href="../create_account.php"
            </script>
            ';
            exit();
        }

        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            //header ('location:home.php');
            echo '<script> 
             alert("Te has registrado correctamente")
             window.location.href="../index.php";</script>';
        } else {
        ?>
                    <h3 class="bad">Ocurrio un error!</h3>
                <?php
                }
            } else {
                ?>
                <h3 class="bad">Porfavor completa todos los campos!</h3>
        <?php
            }
            mysqli_close($conexion);
}
?>
<?php
if (isset($_POST['Ejec_targeta'])) {
    include '../Global/conexion.php';

    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $numero_tarjeta = $_POST['NUMTARG'];
    $titular_tarjeta = $_POST['TITULAR'];
    $fecha_vencimiento = $_POST['FCH'];
    $cvv = $_POST['CVV'];
    $tarjeta_marca = $_POST['Tarjeta'];
    $id_moneda = $_POST['id_moneda'];
    $Ahorros = $_POST['Ahorros'];


    $query = "INSERT INTO tarjetas(id_registro, numero_tarjeta, titular_tarjeta, fecha_vencimiento, cvv, id_targ_mar,id_moneda ,monto_ahorros) values('$email','$numero_tarjeta','$titular_tarjeta','$fecha_vencimiento','$cvv','$tarjeta_marca','$id_moneda','$Ahorros')";

    $verificar_targeta = mysqli_query($conexion, "SELECT * FROM `tarjetas` WHERE numero_tarjeta = '$numero_tarjeta'");
    if (mysqli_num_rows($verificar_targeta) > 0) {
        echo '
    <script>
    alert("Esta targeta ya a sido agregada, intente con otra targeta")
    window.location="../add-credit-card.php";
    </script>';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        header("location:../confirm_target.php?email=$email2");
    } else {
        echo '
    <script>
    alert("NO se pudo agregar targeta, intentalo nuevamente")
    window.location="../add-credit-card.php";
    </script>';
    }
    mysqli_close($conexion);
}
?>
<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['email'] = $email;


    include("../Global/conexion.php");

    $consulta = "SELECT * FROM registro WHERE correo='$email' AND password = '$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado); //almacenar resultado

    if ($filas) {
        $agregado = "INSERT INTO `usuario` (correo,password) VALUES ('$email','$password')";
        $agregarUsuario = mysqli_query($conexion, $agregado);
        header("location:../Verificacion.php?user=$email");
    } else {
    ?>

            <?php
            echo '
            <script>
            alert("Cuenta inexistente o mal escrita, Intentalo nuevamente")
            window.location="../index.php";
            </script>';
            ?>
    <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>
<?php
if (isset($_POST['edit_cuenta'])) {
    include '../Global/conexion.php';
    $username = $_GET['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $country = $_POST['country'];

    $query = "UPDATE `registro` SET `fullname`='$fullname',`correo`='$email',password='$password',`username`='$username',`id_pais`='$country' WHERE `username`='$username'";
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        $new = "INSERT INTO `usuario`(correo,password) VALUES ('$email', '$password')";
        $listo = mysqli_query($conexion, $new);
        header("location:../home.php?email=$email");
    } else {
        echo '
        <script>
        alert("No se puede editar, inténtelo nuevamente");
        </script>';
        header("location:../my_account.php?username='$username'");
    }
    mysqli_close($conexion);
}
?> 
 <?php
if (isset($_POST['Edit_targeta'])) {
    include '../Global/conexion.php';

    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $numero_tarjeta = $_POST['NUMTARG'];
    $titular_tarjeta = $_POST['TITULAR'];
    $fecha_vencimiento = $_POST['FCH'];
    $cvv = $_POST['CVV'];
    $tarjeta_marca = $_POST['Tarjeta'];
    $id_moneda = $_POST['id_moneda'];
    $Ahorros = $_POST['Ahorros'];


    $query = "UPDATE `tarjetas` SET `id_registro`='$email', `numero_tarjeta`='$numero_tarjeta',`titular_tarjeta`='$titular_tarjeta',`fecha_vencimiento`='$fecha_vencimiento',`cvv`='$cvv',`id_targ_mar`='$tarjeta_marca',`id_moneda`='$id_moneda',`monto_ahorros`='$Ahorros' WHERE `numero_tarjeta`='$numero_tarjeta'";

    $verificar_targeta = mysqli_query($conexion, $query);
    if ($verificar_targeta) {
        echo '
    <script>
    alert("Se a editado targeta")
    
    </script>';

        header("location:../confirm_target.php?email=$email2");
    } else {
        echo '
    <script>
    alert("NO se pudo agregar targeta, intentalo nuevamente")
    
    </script>';
    header("location:../confirm_target.php?email=$email2");
    }
    mysqli_close($conexion);
}
?>