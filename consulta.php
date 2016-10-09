<?php
$nombre = $_POST['materia'];
$numero = $_POST['numero'];
$grado = $_POST['grado'];
$asesor = $_POST['asesor'];
$reqlen = strlen($nombre) * strlen($numero) * strlen($grado) * strlen($asesor);

if($reqlen > 0){
	require ('conexion.php');	
	mysqli_query($con,"INSERT INTO materia (`materia`, `numero`, `grado`, `asesor`) VALUES ('$nombre','$numero','$grado', '$asesor')");
		echo "Datos guardados correctamente";
			header( "refresh:3;url=materias.php" );
}else{
	
	

	echo "Por favor, rellenar todos los campos*";
}

?>