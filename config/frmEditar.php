<?php
require_once("frmConfig.php");
$ruta = new classConfig();
$dirEditar = $ruta->rutaEditar();

if(!empty($_POST['editaHerbario'])){
	$vect = json_decode($_POST['editaHerbario']);
	$time = time();
	$data = array('dato1'=>$vect[0], 'dato2'=>$vect[1], 'dato3'=>$vect[2], 'dato4'=>$vect[3], 'dato5'=>$vect[4], 'dato6'=>$vect[5], 'dato7'=>$vect[6], 'dato8'=>$vect[7], 'dato9'=>$vect[8], 'dato10'=>$vect[9], 'dato11'=>$vect[10], 'dato12'=>$vect[11], 'dato13'=>$vect[12], 'dato14'=>$vect[13], 'dato15'=>$vect[14], 'dato16'=>$vect[15], 'dato17'=>$vect[16], 'dato18'=>$vect[17], 'dato19'=>$vect[18], 'dato20'=>$vect[19], 'dato21'=>$vect[20], 'dato22'=>$vect[21]);
	
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data),
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($dirEditar.'opc=modHerbario', false, $context);
	echo $result;
}

?>