<?php 

$nombre=$_REQUEST['nombre'];


$conexion=mysqli_connect("localhost","root","","testdb") or die("Problemas con la Conexion");
 

 //Para obtener una consulta de un dato en especifico simplemente usamos el comando WHERE 


$registros1=mysqli_query($conexion,"SELECT * FROM estudiante WHERE Nombre='$nombre'") or die("Problemas con la consulta");




 while ($datos=mysqli_fetch_array($registros1)) {
 	echo "Nombre: ".$datos['Nombre'];
 	print("<br>");
 	echo "Apellido: ".$datos['Apellido'];
 	print("<br>");
 	echo "Calificacion: ".$datos['Calificación'];
 	print("<br>");
 	print("<br><br>");
 	
 }

 
 








mysqli_close($conexion);

 ?>