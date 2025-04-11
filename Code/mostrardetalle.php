

<?php




$conexion= new MySQLi($host, $adminbd, $pss, $bd);
$conexion->set_charset("utf8");

if ($conexion -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" .$mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			

			

?>


<html lang="en">
<head>
  <title>ESCUELA SUPERIOR POLITÉCNICA DE CHIMBORAZO</title>
	<meta charset="UTF-8">
   <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
	<meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
	  <link rel="icon" type="image/png" href="style/espoch.png">
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	
	
	
</head>

<body>
	
  <div id="main">
    <div id="links"></div>
    <div id="header">
      <div id="logo">
        <h1>DBRA - <span class="alternate_colour">HERBARIO </span></h1>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="index.html">HERBARIO</a></li>
          <li><a href="ddautor.html">USO DE DATOS</a></li>
		  <li ><a href="mostrar.php">ESPECÍMENES</a></li>
          <li><a href="contacto.html">CONTACTO</a></li>
          <li class="tab_selected"><a href="mostrardetalle.php">Detalle</a></li>
        </ul>
      </div>
    </div>
	  
    <div id="site_content">
      <div id="panel"><img src="style/herbarioimag.png" alt="tree tops" /></div>
      <div class="sidebar">
		<h1>HERBARIO ESPOCH</h1>
          <p>Encuéntranos: Planta Baja del Edificio de la DBRA (Biblioteca Central).</p>
		  <p> Responsable: </p>
		   Ing. Jorge Caranqui
		<p>herbario.frn@espoch.edu.ec</p>
		  
           Lunes a Viernes 
        <p>07:30 a 16:30 pm.</p>
        
        DBRA:
		<p>direcciondbrai@espoch.edu.ec</p>
		  <img src="style/logo_herbario.jpg" alt="Logo Herbario" />
      </div>
      <div id="content">
		<h1><strong>Bienvenidos a la base de datos del Herbario de la ESPOCH</strong></h1>
		<p align="justify">Aquí podrá visualizar todos los datos del especímen seleccionado que se encuentran reposando en nuestro herbario institucional.</p>
		
		  <table class="uno" id="tablebonita" width="auto" cellpadding="6" cellspacing="10" border="10" bordercolor=" #B5B5B5" bgcolor="aliceblue ">
          <tr><th></th><th align="center">Datos de Especímen Detallado </th></tr>

	<?php 	
			

$id = $_GET['variable1'];

$**** = " SELECT * FROM xxxxxxxxxxx WHERE idcartulina = '$id'";

		
	$resherbarioe=$conexion->query($****) ;
 
		
		while ($registroherbario = $resherbarioe -> fetch_array(MYSQLI_BOTH))
			
		 {
			
		  echo'
		  
		  <tr><td><strong>Number Id </strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['idcartulina'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Index </strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['indexautor'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Collector Number</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['idcoleccion'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Family</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['family'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Taxon</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['taxon'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Author</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['autor'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Determined By </strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['determby'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Country</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['pais'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Province</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['provincia'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Lower Political</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['lower'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Vicinity</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['vinicity'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Elevation</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['elevation'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Latitude , Longitude</strong></td> <td  align="center" ><input type="text"  style="background-color: white" value=" '.$registroherbario['cordinatesx'].' , '.$registroherbario['cordinatesy'].'" disabled /></td> <td style="background-color: #F0F8FF"><a href="maps.php?variable1='.$registroherbario['cordinatesx'].' &variable2='.$registroherbario['cordinatesy'].' &variable3='.$registroherbario['vinicity'].' &variable4='.$registroherbario['coordinates'].'" target="_blank"> <img src="style/maps.png" alt="Ubicación" height="35" /> </a></td></tr>
		  
		  <tr><td><strong>Collectors</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['colectors'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Collection Date</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['colectdate'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Herbarium</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['herbar'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Specimen Description</strong></td> <td  align="center" ><input type="text" 
          style="background-color: white" value=" '.$registroherbario['descrip'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Phenology</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['fenol'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Patente</strong></td> <td  align="center" ><input type="text" style="background-color: white" value=" '.$registroherbario['patente'].'" disabled /></td></tr>
		  
		  <tr><td><strong>Photo</strong></td> <td style="background-color: white"><a href='.$registroherbario['img'].' target="_blank" > <img src="'.$registroherbario['img'].'"  /></a></td></tr>
		  
		  ';
		 }
		mysqli_close($conexion); 
		?>
			  
	</table> 	
			 
	</form>
		  
		 
		
		</div>
    <div id="site_content_bottom"></div>
    </div>
   <div id="footer">Copyright &copy; ESPOCH. TODOS LOS DERECHOS RESERVADOS. | <a href="http://espoch.edu.ec">ESPOCH</a>  |  <a> <li>2025</a>|<a href="http://biblioteca.espoch.edu.ec"> DBRA </a> </div>
	</div>
  </body>
<script src="./js/jquery-3.5.1.js"></script>
<script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="js/app.js"></script>
</html>
