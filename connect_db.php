<?php



$tablabd = "******" ;


		$mysqli = new MySQLi($host, $adminbd,$pss, $bd);
        $mysqli->set_charset("utf8");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";

?>