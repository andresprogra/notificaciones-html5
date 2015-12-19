<?php



$name = $_POST['name'];
$last = $_POST['last'];
$pais = $_POST['pais'];
$comentario = $_POST['comentario'];

$link = mysql_connect("andresdominguez.mx", "revistet_html", "platzi.com123") or die ('Mal');
mysql_select_db("revistet_html",$link);
$sql = "INSERT INTO notificaciones (nombre, last, pais, comentario) ".
     "VALUES ('$nombre', '$last', '$pais', '$comentario')";
$result = mysql_query($sql);
echo "¡Gracias! Hemos recibido sus datos.\n"; 


	
//header('Location: index.php');

 
//mysql_close($db_connection);
?>

