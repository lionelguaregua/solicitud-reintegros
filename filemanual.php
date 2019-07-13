<?php


include("conexion2.php");
$nik = mysqli_real_escape_string($mysqli,(strip_tags($_GET["nik"],ENT_QUOTES)));
$sql = mysqli_query($mysqli, "SELECT * FROM reintegros WHERE servicio='$nik'");
$row = mysqli_fetch_assoc($sql);

$codigo = $nik;


	foreach($_FILES["manualmente"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
    	if($_FILES["manualmente"]["name"][$key]) {
		$filename = $_FILES["manualmente"]["name"][$key]; //Obtenemos el nombre original del archivo
		$source = $_FILES["manualmente"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
		$directorio =  '../solicitud/docs/'.$row['servicio'].'/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
		if(!file_exists($directorio)){
				mkdir($directorio, 0755) or die("No se puede crear el directorio de extracci&oacute;n");	
		}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
		$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
		if(move_uploaded_file($source, $target_path)) {	
				echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
				} else {	
				echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
			}
			
		}
}



  ?>