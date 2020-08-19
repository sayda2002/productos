<?php 
include 'conexion.php';
$nombreproducto = $con -> real_escape_string(htmlentities($_POST['nombreproducto']));
$precio = $con -> real_escape_string(htmlentities($_POST['precio']));
$fechavencimiento = $con -> real_escape_string(htmlentities($_POST['fechavencimiento']));
$descripcion = $con -> real_escape_string(htmlentities($_POST['descripcion']));
$stock = $con -> real_escape_string(htmlentities($_POST['stock']));
$fecharegistro = $con -> real_escape_string(htmlentities($_POST['fecharegistro']));

$inserta_data = $con ->query("INSERT INTO productos VALUES('','$nombreproducto','$precio','$fechavencimiento','$descripcion','$stock','$fecharegistro')  ");

echo "REGISTRO EXITOSAMENTE SUS DATOS"; 
?>