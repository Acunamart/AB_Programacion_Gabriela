<?php
$hostname="localhost";
$username="root";
$password="DadoyCanete05!";
$bd="programacion";


$conexion=@new mysqli($hostname,$username,$password,$bd);
if(!$conexion){
    echo "<font color='blue' size='4'> ERROR:No se pudo realizar la conexión</font> "
}
?>