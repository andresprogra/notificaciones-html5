<?php
$db_host="138.128.189.242";
$db_user="revistet_html";
$db_password="platzi.com123";
$db_name="revistet_html";
$db_table_name="notificaciones";
//$db_table_name="nombre_de_tabla";
$db_connection = mysql_connect($db_host, $db_user, $db_password);





 
if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$name = utf8_decode($_POST['name']);
$last = utf8_decode($_POST['last']);
$pais = utf8_decode($_POST['pais']);
$comentario = utf8_decode($_POST['comentario']);
 
//$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);
 

	
$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` ('nombre' , 'last' , 'pais' , 'comentarios') VALUES ("' . $name . '", "' . $last . '", "' . $pais . '", "' . $comentario . '")';
 
mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);
 
if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: index.php');

 
mysql_close($db_connection);
?>

