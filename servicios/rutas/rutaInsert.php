<?php
require_once("../modelo/modIngreso.php");
$ruta = new classIngreso();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	if (isset($_GET['opc']) && $_GET['opc'] == "ingresoPadre")
		$ruta -> ingresoPadreOpcion($_POST);
	if (isset($_GET['opc']) && $_GET['opc'] == "ingresoSuperior")
		$ruta -> ingresoSuperior($_POST);
	if (isset($_GET['opc']) && $_GET['opc'] == "ingresoOpcion")
		$ruta -> ingresoOpcion($_POST);
	if (isset($_GET['opc']) && $_GET['opc'] == "ingresoContenido")
		$ruta -> ingresoContenido($_POST);
	if (isset($_GET['opc']) && $_GET['opc'] == "ingresoSlider")
		$ruta -> ingresoImages($_POST);
}
	
?>