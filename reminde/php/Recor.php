<?php
global $user;
$user = $_GET['email'];
    $consulta = $conexion->query("SELECT r.id_recordatorio,r.fecha_inicio,r.fecha_final,r.id_registro,r.id_categoria,r.descripcion,r.modo_de_pago,r.frecuencia,r.monto,c.tipo,e.correo FROM recordatorio as r INNER JOIN recordatorio_tipo as c ON r.id_categoria = c.id_categoria INNER JOIN registro as e ON r.id_registro = e.id_registro where correo='$user';");
?>