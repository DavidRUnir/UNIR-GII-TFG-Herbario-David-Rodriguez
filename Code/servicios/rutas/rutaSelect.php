<?php
require_once("../modelo/modSelect.php");
$ruta = new classSelect();

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

	if (isset($_GET['opc']) && $_GET['opc'] == "ingreso")
		$ruta -> verAcceso($_GET['usuario'], $_GET['clave']);

	if (isset($_GET['opc']) && $_GET['opc'] == "verDatos")
		$ruta -> verTodosDatos($_GET['cual']);

	if (isset($_GET['opc']) && $_GET['opc'] == "verUnDato")
		$ruta -> verEspecifico($_GET['cual'], $_GET['dato']);
	
	if (isset($_GET['opc']) && $_GET['opc'] == "verEspecifico1")
		$ruta -> verLetra($_GET['dato1'], $_GET['dato2'], $_GET['dato3'], $_GET['dato4'], $_GET['dato5'], $_GET['dato6'], $_GET['dato7']);
}

?>