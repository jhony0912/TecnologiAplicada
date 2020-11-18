<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="designer";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


	//recuperar las variables
	$nombre=$_POST['nombres'];
	$apellido=$_POST['apellidos'];
	$edad=$_POST['edad'];
	$correo=$_POST['correo'];
	$contraseña=$_POST['contraseña'];
	//sentencia sql
	$sql="INSERT INTO personas (nombres, apellidos, edad, correo, contrasena) VALUES('$nombre','$apellido','$edad','$correo','$contraseña')";

	//EJECUTAR SENTENCIA SQL
	
	$ejecutar=mysqli_query($con,$sql);
	//verificamos ejecucion
	if (!$ejecutar) {
		echo "hubo algun error" . $sql . "<br>" . mysqli_error($con);
	}else{
		echo "Datos guardados correctamente<br><a href='../index.html'>Volver</a>";
	}

?>