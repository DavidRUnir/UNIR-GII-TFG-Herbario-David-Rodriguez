<?php
require_once("../config/database.php");
require_once("../config/config.php");

class classEditar{
	private $dbProyecto;

	public function __construct(){
		$menu = new classBaseDatos();
		$this->dbProyecto = $menu->abrirConexion();
	}

	private function set_names(){
		return $this->dbProyecto->query("SET NAMES 'utf8'");
	}
	
	public function editarHerbario($param){
		self::set_names();
		$sql = "UPDATE berbarioespoch SET indexautor='".$param['dato1']."',idcoleccion=".$param['dato2'].",family='".$param['dato3']."',taxon='".$param['dato4']."',autor='".$param['dato5']."',determby='".$param['dato6']."',pais='".$param['dato7']."',provincia='".$param['dato8']."',lower='".$param['dato9']."',vinicity='".$param['dato10']."',elevation=".$param['dato11'].",coordinates='".$param['dato12']."',cordinatesx=".$param['dato13'].",cordinatesy=".$param['dato14'].",colectors='".$param['dato15']."',colectdate='".$param['dato16']."',herbar='".$param['dato17']."',descrip='".$param['dato18']."',fenol='".$param['dato19']."',patente='".$param['dato20']."',img='".$param['dato21']."' WHERE idcartulina = ".$param['dato22'].";";
		$result = $this->dbProyecto->query($sql);
		
		if ($result)
			$resp = array('resultado' => true);
		else
			$resp = array('resultado' => false);
		echo json_encode($resp);
	}
}

?>

