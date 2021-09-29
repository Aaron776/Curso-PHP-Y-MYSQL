<?php 

$conexion=mysqli_connect("localhost","root","","testdb") or die("Problemas con la Conexion");
 


//Para eliminar los registro de una tabla usamos la sentencia DELETE de SQL
mysqli_query($conexion,"DELETE FROM estudiante") or die("Problemas con la consulta");


echo "Se han eliminado todos los registros de la tabla estudiante";

mysqli_close($conexion);
 ?>