<?php
$con= mysqli_connect('localhost', 'root', '');
if (!$con){
die ("No se pudo establecer conexion" . mysql_error());

} else {

mysqli_select_db($con,'bdvideo_d');

}

?>