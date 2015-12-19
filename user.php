<?php
$db_host="138.128.189.242";
$db_user="revistet_html";
$db_password="platzi.com123";
$db_name="revistet_html";
$db_table_name="notificaciones";
//$db_table_name="nombre_de_tabla";
$db_connection = mysql_connect($db_host, $db_user, $db_password);

$name = $_POST['name'];
$last = $_POST['last'];
$pais = $_POST['pais'];
$comentario = $_POST['comentario'];

$link = mysql_connect("andresdominguez.mx", "revistet_html", "platzi.com123");
mysql_select_db("revistet_html",$link);
$sql = "INSERT INTO notificaciones (nombre, last, pais, comentario) ".
     "VALUES ('$nombre', '$last', '$pais', '$comentario')";
$result = mysql_query($sql);
echo "¡Gracias! Hemos recibido sus datos.\n"; 


	
//header('Location: index.php');

 
//mysql_close($db_connection);
?>

