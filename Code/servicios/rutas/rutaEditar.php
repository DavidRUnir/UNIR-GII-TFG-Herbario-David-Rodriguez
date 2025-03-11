<?php
require_once("../modelo/modEditar.php");
$ruta = new classEditar();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (isset($_GET['opc']) && $_GET['opc'] == "modHerbario")
		$ruta -> editarHerbario($_POST);
}
?>