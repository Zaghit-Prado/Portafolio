<?php
include 'Global/conexion.php';
global $user;
$user = $_GET['email'];
$query = "DELETE FROM `usuario` WHERE correo='$user'";   
$ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){
        echo'
        <script>
        alert("Se acaba de cerrar su cuenta")
        window.location="index.php";
        </script>';
        
    }else{
        echo'
        <script>
        alert("NO se pudo cerrar su cuenta")
        window.location="index.php";
        </script>';
    }
    mysqli_close($conexion);
?>
