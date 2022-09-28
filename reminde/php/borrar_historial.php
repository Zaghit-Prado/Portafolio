<?php
include '../Global/conexion.php';
$correo = $_GET['email'];
$id = $_GET['id'];
$eliminar = "delete from transferencia where id_registro='$id'";
$ejecutar = mysqli_query($conexion, $eliminar);
if ($ejecutar) {
    header("location:../historial_tranf.php?email=$correo");
} else {
    echo '
<script>
alert("Su historial esta vacio");
</script>';
header("location:../historial_tranf.php?email=$correo");
}
?>