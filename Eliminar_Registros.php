<?php 

$nombre=$_REQUEST['nombre'];


$conexion=mysqli_connect("localhost","root","","testdb") or die("Problemas con la Conexion");
 



$registros=mysqli_query($conexion,"SELECT * FROM estudiante WHERE Nombre='$nombre'") or die("Problemas con la consulta");

//Para aseguranos que los resgitros de las base de datos se nos estan trayendo podemos usar una sentencia if y de paso ponemos una consulta SQL para eliminar ese registro en caso de que si exista con la sentecia DELETE

if ($datos=mysqli_fetch_array($registros)) {

     mysqli_query($conexion,"DELETE FROM estudiante WHERE Nombre='$nombre'") or die("Problemas con la consulta");

     echo "Se ha eliminado ese registro satisfactoriamente";
    
}else{
    echo "Ese registro no existe en la base de datos y por ende no se puede eliminar";
}




 /*while ($datos=mysqli_fetch_array($registros1)) {
 	echo "Nombre: ".$datos['Nombre'];
 	print("<br>");
 	echo "Apellido: ".$datos['Apellido'];
 	print("<br>");
 	echo "Calificacion: ".$datos['Calificación'];
 	print("<br>");
 	print("<br><br>");
 	
 }*/
mysqli_close($conexion);
 ?>