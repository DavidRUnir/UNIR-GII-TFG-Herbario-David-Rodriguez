<?php
require_once("../config/database.php");
require_once("../config/config.php");

class classIngreso{
	private $dbProyecto;

	public function __construct(){
    $menu = new classBaseDatos();
    $this->dbProyecto = $menu->abrirConexion();
	}

	private function set_names(){
		return $this->dbProyecto->query("SET NAMES 'utf8'");
	}
	
	public function ingresoPadreOpcion($param){
		self::set_names();
		$sql = "INSERT INTO tblPadreOpcion(nombre, icono, url, orden, estado) VALUES ('".$param['nombre']."', '".$param['icono']."', '".$param['url']."', ".$param['orden'].", ".$param['estado'].")";
		$result = $this->dbProyecto->query($sql);
		
		if ($result) 
			echo json_encode('true');
		else
			echo json_encode('false');
	}
	public function ingresoSuperior($param){
		self::set_names();
		$sql = "INSERT INTO tblSuperior(nombre, detalle, url, estado, padre) VALUES ('".$param['nombre']."', '".$param['detalle']."', '".$param['url']."', ".$param['estado'].", ".$param['padre'].")";
		$result = $this->dbProyecto->query($sql);
		
		if ($result) 
			echo json_encode('true');
		else
			echo json_encode('false');
	}
	public function ingresoOpcion($param){
		self::set_names();
		$sql = "INSERT INTO tblOpcion(nombre, detalle, etiqueta, url, imagen, estado, menu) VALUES ('".$param['nombre']."', '".$param['detalle']."', '".$param['etiqueta']."', '".$param['url']."', '".$param['imagen']."', ".$param['estado'].", ".$param['padre'].")";
		$result = $this->dbProyecto->query($sql);
		
		if ($result) 
			echo json_encode('true');
		else
			echo json_encode('false');
	}
	public function ingresoContenido($param){
		self::set_names();
		$sql = "INSERT INTO tblContenido(detalle, tipo, estado, opcion) VALUES ('".$param['detalle']."', ".$param['tipo'].", ".$param['estado'].", ".$param['opcion'].")";
		$result = $this->dbProyecto->query($sql);
		
		if ($result) 
			echo json_encode('true');
		else
			echo json_encode('false');
	}
	public function ingresoImages($param){
		self::set_names();
		$sql = "INSERT INTO tblImages(imagen, detalle, estado) VALUES ('".$param['imagen']."', '".$param['detalle']."', ".$param['estado'].")";
		$result = $this->dbProyecto->query($sql);
		
		if ($result) 
			echo json_encode('true');
		else
			echo json_encode('false');
	}
}

?>

