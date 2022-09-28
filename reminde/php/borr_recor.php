<?php
date_default_timezone_set('America/Lima');
// $date = date('m-d-Y h:i:s a', time());
$date = date('Y-m-d', time());


// Sacamos la Fecha final ["Recordatorios"] del usuario actual
// Output: 2022-06-08
global $user;
$user = $_GET['email'];
$consulta = " SELECT r.id_registro, r.fecha_final, r.descripcion FROM recordatorio as r INNER JOIN registro as e ON r.id_registro = e.id_registro where correo='$user'; ";


$resultado = mysqli_query($conexion, $consulta);
// $fila = $resultado->fetch_array();

while ($fila = $resultado->fetch_array()) {
    if ($date == $fila['fecha_final']) {
        $descripcion = $fila['descripcion'];
        $add_notif = "INSERT INTO notif(descripcion,correo) VALUES ('$descripcion','$user')";
        $responsive = mysqli_query($conexion, $add_notif);

        
        $delete_reminder = " DELETE FROM `recordatorio` WHERE fecha_final < '$date' ";
         $exec = mysqli_query($conexion, $delete_reminder);

         $delete_remindera = " DELETE FROM `recordatorio` WHERE fecha_final = '$date' ";
         $execa = mysqli_query($conexion, $delete_remindera);
    }

}
?>