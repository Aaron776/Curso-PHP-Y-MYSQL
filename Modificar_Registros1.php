<?php 

$newCal=$_POST['newCal'];
$nombre=$_POST['nombre'];

$conexion=mysqli_connect("localhost","root","","testdb") or die("Problemas con la Conexion");


mysqli_query($conexion,"UPDATE estudiante SET Calificación=$newCal WHERE Nombre='$nombre'") or die("Problemas con la consulta");

echo "El registro se ha modificado correctamente";

 ?>