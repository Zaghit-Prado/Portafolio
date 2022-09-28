<?php
include '../Global/conexion.php';
$id = $_GET['id'];
$correo = $_GET['correo'];
$eliminar = "delete from notif where id='$id'";
$ejecutar = mysqli_query($conexion, $eliminar);
if ($ejecutar) {
    header("location:../home.php?email=$correo");
} else {
    echo '
<script>
alert("No se pudo eliminar notificacion");
</script>';
header("location:../home.php?email=$correo");
}
?>