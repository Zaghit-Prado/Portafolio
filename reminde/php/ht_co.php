<?php
global $user;
$user = $_GET['email'];
$consulta = $conexion->query("SELECT r.correo,tr.num_cuenta,tr.monto,tr.fecha,m.moneda,m.simbolo,t.numero_tarjeta,mt.img_moneda,tr.id_tra FROM registro as r INNER JOIN transferencia as tr ON r. id_registro=tr.id_registro INNER JOIN monedas as m ON tr.id_moneda=m.id_moneda INNER JOIN tarjetas as t ON tr.id_origen=t.id_tarjeta INNER JOIN marca_targeta as mt ON t.id_targ_mar=mt.id_targ_mar where correo='$user' ORDER BY tr.id_tra DESC;");
?>