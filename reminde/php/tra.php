<?php
global $user;
$user = $_GET['email'];
$query = "SELECT t.id_tarjeta,t.id_targ_mar,t.numero_tarjeta,mo.convertir,m.marca,t.monto_ahorros,mo.simbolo FROM tarjetas as t INNER JOIN registro as r ON t.id_registro = r.id_registro INNER JOIN marca_targeta as m ON m.id_targ_mar=t.id_targ_mar INNER JOIN monedas as mo ON t.id_moneda=mo.id_moneda
WHERE correo = '$user';";
$types = mysqli_query($conexion, $query);
?>