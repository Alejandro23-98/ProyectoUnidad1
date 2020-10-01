<?php 
	
	$cantidad = $_POST['cantidad'];
	$total = $cantidad*28000
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="assets/css/estilos.css">
<head>
	<?php include 'nav.php'; ?>
	<title></title>

	<section id="slider">
		<figure>
			<center><img src="imagenes/Almacen/lap.png"></center>
				<div class="form-group">
</head>
<body>
<center>
	<h1></h1>
	<h2>total: <?php echo $total;?></h2>
	<h2>cantidad: <?php echo $cantidad;?></h2>
	

	<a href="lap.php"><button type="submit" class="btn btn-danger">Regresar</button></a>
	<a href="Agradecimiento.php"><button type="submit" class="btn btn-success">Pagar</button></a>

</center>
</body>
</html>

