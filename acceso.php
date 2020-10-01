<?php

if (isset($_POST['user'])  && isset($_POST['password']) ){
	
	$users = $_POST['user'];
	$pass = $_POST['password'];

if($users == "administrador" && $pass == "nimda")	
{
	header('Location: dashboard.php');
}else{?>
	<script>
    alert("¡ERROR, Ingrese Usuario O Contraseña Correcta!")
    window.location = "index.php";
</script>
<?php
}

if($users == "cliente" && $pass == "tneilc")	
{
	header('Location:  lap.php');
}else{?>
	<script>
    alert("¡ERROR, Ingrese Usuario O Contraseña Correcta!")
    window.location = "index.php";
</script>	
<?php
}
	}
	?>
