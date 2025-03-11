<?php
require_once("../config/database.php");
require_once("../config/config.php");
class classSelect
{
  private $dbHerbario;
  private $vecResp;

  public function __construct(){
    $this->vecResp = array();
    $menu = new classBaseDatos();
    $this->dbHerbario = $menu->abrirConexion();
  } 
  private function set_names(){
    return $this->dbHerbario->query("SET NAMES 'utf8'");
  }

  public function verAcceso($correo, $acceso){
    self::set_names();

    $this->dbHerbario->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $this->dbHerbario->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sentencia = "SELECT correoadmin, nombres, contrasena, id FROM login WHERE correoadmin = ? AND contrasena = ?";

    $stmt = $this->dbHerbario->prepare($sentencia);
    $stmt->execute(array($correo, $acceso));
    while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
      $this->vecResp[]=$rs;
    }
    if(count($this->vecResp)>0)
      $resp = array('resultado' => true, 'acceso' => $this->vecResp);
    else
      $resp = array('resultado' => false);
    echo json_encode($resp);
    $this->dbHerbario=null;
  }
  public function verTodosDatos($opc){
    self::set_names();

    $this->dbHerbario->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $this->dbHerbario->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sentencia = "";

    if($opc == 1)
      $sentencia = "SELECT * FROM berbarioespoch;";

    $stmt = $this->dbHerbario->prepare($sentencia);
    $stmt->execute(array());
    while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
      $this->vecResp[]=$rs;
    }
    if(count($this->vecResp)>0)
      $resp = array('resultado' => true, 'respDatos' => $this->vecResp);
    else
      $resp = array('resultado' => false);
    echo json_encode($resp);
    $this->dbHerbario=null;
  }

  public function verEspecifico($opc, $param){
    self::set_names();

    $this->dbHerbario->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $this->dbHerbario->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sentencia = "";

    if($opc == 1)
      $sentencia = "SELECT * FROM berbarioespoch WHERE idcartulina = ?";

    $stmt = $this->dbHerbario->prepare($sentencia);
    $stmt->execute(array($param));
    while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
      $this->vecResp[]=$rs;
    }
    if(count($this->vecResp)>0)
      $resp = array('resultado' => true, 'respDatos' => $this->vecResp);
    else
      $resp = array('resultado' => false);
    echo json_encode($resp);
    $this->dbHerbario=null;
  }

  
  public function verLetra($param1, $param2, $param3, $param4, $param5, $param6, $param7){
    self::set_names();

      if($param7 == 1)
        $sql="SELECT * FROM berbarioespoch WHERE taxon LIKE '%".$param1."%' AND family LIKE '%".$param2."%' AND indexautor LIKE '%".$param3."%' AND provincia LIKE '%".$param4."%' AND lower LIKE '%".$param5."%' AND elevation = ".$param6.";";
      else
      if($param7 == 2)
        $sql="SELECT * FROM berbarioespoch WHERE taxon LIKE '%".$param1."%' AND family LIKE '%".$param2."%' AND indexautor LIKE '%".$param3."%' AND provincia LIKE '%".$param4."%' AND lower LIKE '%".$param5."%' AND elevation > ".$param6.";";
      else
      if($param7 == 3)
        $sql="SELECT * FROM berbarioespoch WHERE taxon LIKE '%".$param1."%' AND family LIKE '%".$param2."%' AND indexautor LIKE '%".$param3."%' AND provincia LIKE '%".$param4."%' AND lower LIKE '%".$param5."%' AND elevation < ".$param6.";";
      else
      $sql="SELECT * FROM berbarioespoch WHERE taxon LIKE '%".$param1."%' AND family LIKE '%".$param2."%' AND indexautor LIKE '%".$param3."%' AND provincia LIKE '%".$param4."%' AND lower LIKE '%".$param5."%';";
    
    foreach ($this->dbHerbario->query($sql) as $res){
      $this->vecResp[]=$res;
    }

    if(count($this->vecResp)>0)
      $resp = array('resultado' => true, 'respDatos' => $this->vecResp);
    else
      $resp = array('resultado' => false);
    echo json_encode($resp);
    $this->dbHerbario=null;

  }

}

?>

