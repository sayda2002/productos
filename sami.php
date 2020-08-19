<?php 
include 'conexion.php';
$sel_todo = $con -> query("SELECT * FROM productos");
while ($sin = $sel_todo -> fetch_assoc()) {
?>
<?php } ?>

 