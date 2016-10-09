<?php
$nombre = $_POST['materia'];
$grado = $_POST['grado'];
$asesor = $_POST['asesor'];
$nombrea="";

if(isset($_FILES['numero']['name']))
{
	$dir_subida = 'materias/';
	$nombrea=$_FILES['numero']['name'];
$fichero_subido = $dir_subida . basename($_FILES['numero']['name']);
move_uploaded_file($_FILES['numero']['tmp_name'], $fichero_subido);
}
$reqlen = strlen($nombre) * strlen($grado) * strlen($asesor);

if($reqlen > 0){
	require ('conexion.php');	
	mysqli_query($con,"INSERT INTO materia (`materia`, `numero`, `grado`, `asesor`) VALUES ('$nombre','$nombrea','$grado', '$asesor')");
		echo "Datos guardados correctamente";
			header( "refresh:3;url=materias.php" );
}else{
	
	

	echo "Por favor, rellenar todos los campos*";
}

?>