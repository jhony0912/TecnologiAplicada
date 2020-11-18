<?php
 	//conectamos Con el servidor
 	$host ="localhost";
 	$user ="root";
 	$pass ="";
 	$db="designer";
 	$correo=$_POST['correo'];
	$contraseña=$_POST['contraseña'];

 	//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 	$con = mysqli_connect($host,$user,$pass,$db);
	$sql="SELECT * FROM personas WHERE correo='$correo' and contrasena = '$contraseña'";
	$ejecutar=mysqli_query($con,$sql);

	$filas = mysqli_num_rows($ejecutar);

	//verificamos ejecucion
	if ($filas>0) {
		header("location:../vistas/bienvenido.html");
	}else{
		echo "error en la autentificacion";
	}
	mysqli_free_result($ejecutar);
	mysqli_close($con);
?>