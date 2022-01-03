<?php 

$nombre=$_REQUEST['nombre'];


$conexion=mysqli_connect("localhost","root","","testdb2") or die("Problemas con la Conexion");
 

 //Para obtener una consulta de un dato en especifico simplemente usamos el comando WHERE 


$registros1=mysqli_query($conexion,"SELECT * FROM estudiante WHERE Nombre='$nombre'") or die("Problemas con la consulta");




 while ($datos=mysqli_fetch_array($registros1)) {
 	echo "Id_Alumno: ".$datos['id_alumno'];   // en los corchetes ponemos el nombre del campo de la tabla pero debe estar igual al de la base de datos
    print("<br>");
    echo "Nombre: ".$datos['Nombre'];
 	print("<br>");
 	echo "Apellido: ".$datos['Apellido'];
 	print("<br>");
    echo "Edad: ".$datos['edad'];
    print("<br>");
 	echo "Calificacion: ".$datos['calificacion'];
 	print("<br>");
 	print("<br><br>");
 	
 }

 
 








mysqli_close($conexion);

 ?>