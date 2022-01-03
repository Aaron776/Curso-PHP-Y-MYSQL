<?php 

//$nombre=$_REQUEST['nombre'];
//$apellido=$_REQUEST['apellido'];
//$calificacion=$_REQUEST['calificacion'];

$conexion=mysqli_connect("localhost","root","","testdb2") or die("Problemas con la Conexion");
 

//Para recuperar los datos de una base de datos mediante PHP debemos usar el comando de SQL de SELECT * FROM, los valores que nos devulven sera en forma de matriz y para eso debemos almacenar esa funcion en una variable para que sea mas practico:

//Primer comando para recuperar los datos de los campos de las tablas
$registros=mysqli_query($conexion,"SELECT Nombre,Apellido,Calificación FROM estudiante") or die("Problemas con la consulta");


//Segundo comando para recuperar los datos 
$registros1=mysqli_query($conexion,"SELECT * FROM estudiante") or die("Problemas con la consulta");

//Podemos usar cualquiera de las consultas


//Pra recuperar los datos debemos usar la funcion mysqli_fetch_array(), esta funcion lo que permite hacer es desmenuzar el arreglo o matriz de datos que nos llega de la base de datos cuando queremos recuperarlos, basicamente podremos ir sacando los datos.Para esta funcion usamos un parametro dentro del parentesis, ese parametro es la matriz donde estan nuestros datos recuperados y luego esa funcion de fecth debemos guardarla en una variable

 //$datos=mysqli_fetch_array($registros);

//Ahora para mostrar esos datos debemos usar un ciclo
 while ($datos=mysqli_fetch_array($registros)) {
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

 
 

//mysqli_query($conexion,"INSERT INTO estudiante VALUES ('$nombre','$apellido',$calificacion)") or die("Problemas con la consulta");






mysqli_close($conexion);
//echo "Datos Guardados exitosamente!";

 ?>