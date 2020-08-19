<?php 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link  href="https://fonts.googleapis.com/icon?family=material+icons" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous" ></script>
 </head>
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col s6 l6 m6">
 				<div class="card green">
 					<div class="card-title">
 						<h4>REGISTRO DE PRODUCTOS</h4>
 					</div>
 					<div class="card-content">
 						<form action="funcion.php" method="post" accept-charset="utf-8">
					 		<input type="text" name="nombreproducto" value="" placeholder="ingrese su nombre de protucto">
					 		<input type="number" name="precio" value="" placeholder="ingrese el precio">
					 		<input type="date" name="fechavencimiento" value="" placeholder="">
					 		<input type="text" name="descripcion" value="" placeholder="ingrese su descripcion">
					 		<input type="number" name="stock" value="" placeholder="ingrese su stock">
					 		<input type="date" name="fecharegistro" value="" placeholder="">
					 		<br></br>
					 		<input type="submit" name="REGISTRE" value="REGISTRE">
					 	</form>
 					</div>
 					<div class="card-action">
 						<h6>registro de datos de productos</h6>
 					</div>
 				</div>
 			</div>

 			<div class="col s10 l10 m10">
 				<div class="card">
 					<div class="card red">
 						<div class="card-title">
 						<h4>TABLA DE PRODUCTOS</h4>
 					</div>
 					<div class="card-content">
 						<table border="10">
			              <?php 
							include 'conexion.php';
							$todo = $con->query("SELECT * FROM productos");
							?>
								<thead>
									<tr>
										<th>n°</th>
										<th>nombre productos</th>
										<th>precio</th>
										<th>fecha vencimiento</th>
										<th>descripcion</th>
										<th>stock</th>
										<th>fecha registro</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									while ($sin = $todo->fetch_assoc()) {
									 ?>
									 <tr>
									 	<td><?php echo $sin['idproductos']; ?></td>
									 	<td><?php echo $sin['nombreproducto']; ?></td>
									 	<td><?php echo $sin['precio']; ?></td>
									 	<td><?php echo $sin['fechavencimiento']; ?></td>
									 	<td><?php echo $sin['descripcion']; ?></td>
									 	<td><?php echo $sin['stock']; ?></td>
									 	<td><?php echo $sin['fecharegistro']; ?></td>
									 </tr>
			                     <?php } ?>
 								<tr></tr>
 							</tbody>
 						</table>
 					</div>
 					<div class="card-action">
 								<div class="card pink">
 									<h5> Lista de productos</h5>
 								</div>
 							
 					</div>
 					
 						</div>
 						
 					</div>
 				</div>	
 			</div>
 		</div>
 	</div>
 	

 </body>
 </html>