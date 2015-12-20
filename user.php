<?php



$name = $_POST['name'];
$last = $_POST['last'];
$pais = $_POST['pais'];
$comentario = $_POST['comentario'];



$conn_string = "host=ec2-107-21-224-11.compute-1.amazonaws.com port=5432 dbname=delt70p4uoagga user=bdodcgxjiyfxvh password=wDEMh9FzNIWOMWRBs31w8n18uB";
$conexion = pg_connect($conn_string);
//conectarse a una base de datos llamada "test" en el host "sheep" con el nombre de usuario y password

$result = pg_query($conexion, "INSERT INTO notificaciones(nombre, last, pais, comentarios) 
                  VALUES('$name', '$last', '$pais', '$comentario');");



	
header('Location: index.php');

 
//mysql_close($db_connection);
?>

