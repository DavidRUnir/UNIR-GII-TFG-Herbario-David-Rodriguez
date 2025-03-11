<?php
    session_start();
	if (@!$_SESSION['user']) {
		header("Location:login.html");
	}elseif ($_SESSION['id']==1) {
		header("Location:admin2.php");
	}

include("connect_db.php");
?>

<html lang="en">
<head>
  <title>ESCUELA SUPERIOR POLITÉCNICA DE CHIMBORAZO</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="icon" type="image/png" href="style/espoch.png">
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
          
		  <li class="tab_selected"><a href="ingresarnuevo.php">Ingresar Nuevo</a></li>
          <li><a href="modificar.php">Modificar</a></li>
          <li><a href="mostrar.php" target="_blank">Mostrar</a></li>
		  <li><a href="desconectar.php">Salir</a></li>
		</ul>
      </div>
    </div>
    <div id="site_content">
      <div id="panel"><img src="style/espochbv.png" alt="tree tops" /></div>
      <div class="sidebar">
		 <h1>HERBARIO ESPOCH</h1>
        <p>Encuentranos: Fac. Recursos Naturales. abajo de los predios de Biblioteca Central.</p>
		<p> Responsable: </p>
		   Ing. Jorge Caranqui
		<p>jcaranqui@espoch.edu.ec </p>
		  
           Lunes a Viernes 
        <p>07:30 a 16:30 pm.</p>
        <img src="style/logo_herbario.jpg" alt="Logo Herbario" />
      </div>
      <div id="content">
		<h1><strong>Ingresar nuevo Especímen</strong></h1>
		  
		  <form name="contact" method="POST" action="ingresarnuevo.php">
		   <table class="uno" id="tablebonita" width="auto" cellpadding="6" cellspacing="10" border="10" bordercolor=" #B5B5B5" bgcolor="aliceblue ">
          <tr><th></th><th>Ingrese datos </th></tr>
          <tr><td><strong>Index</strong></td><td><input class="contact" type="text" name="iindex" autocomplete="on" required /></td></tr>
          <tr><td><strong>Collector Number	</strong></td><td><input class="contact" type="number" name="icolection" autocomplete="on" required/></td></tr>
		  <tr><td><strong>Family</strong></td><td><input class="contact" type="text" name="family" autocomplete="on" /></td></tr>
		  <tr><td><strong>Taxon</strong></td><td><input class="contact" type="text" name="itaxon" autocomplete="on" /></td></tr>
		  <tr><td><strong>Author</strong></td><td><input class="contact" type="text" name="iautor" autocomplete="on" /></td></tr>
		  <tr><td><strong>Determined By	</strong></td><td><input class="contact" type="text" name="idetermined" autocomplete="on" /></td></tr>
		  <tr><td><strong>Country</strong></td><td><input class="contact" type="text" name="ipais"  autocomplete="on" required/></td></tr>
		  <tr><td><strong>Province</strong></td><td><input class="contact" type="text" name="iprovince"  autocomplete="on" required/></td></tr>
		  <tr><td><strong>Lower Political</strong></td><td><input class="contact" type="text" name="ilower"  autocomplete="on"/></td></tr>
		  <tr><td><strong>Vicinity	</strong></td><td><input class="contact" type="text" name="ivinicity" autocomplete="on" /></td></tr>
		  <tr><td><strong>Elevation</strong></td><td><input class="contact" type="number" name="ielevation" autocomplete="on" placeholder="9999" /></td></tr>
		   <tr><td><strong>Coordinates</strong><br></td><td><input class="contact" type="text" step="any" name="icordinates" autocomplete="on"  /></td></tr>
		  <tr><td><strong>Latitude </strong></td><td><input class="contact" type="number" step="any" name="icordinatesx" autocomplete="on" placeholder="-1.000000000" /></td></tr>
		  <tr><td><strong>Longitude</strong></td><td><input class="contact" type="number" step="any" name="icordinatesy" autocomplete="on" placeholder="-99.00000000" /></td></tr>
		  <tr><td><strong>Collectors</strong><br></td><td><input class="contact" type="text" name="icolectors" autocomplete="on" /></td></tr>
		  <tr><td><strong>Collection Date</strong></td><td><input class="contact" type="text" name="iColdate" /></td></tr>
		  <tr><td><strong>Herbarium	</strong></td><td><input class="contact" type="text" name="iherbarium" autocomplete="on"/></td></tr>
		  <tr><td><strong>Specimen Description</strong></td><td><input class="contact" type="text" name="idesc" autocomplete="on"/></td></tr>
		  <tr><td><strong>Phenology</strong></td><td><input class="contact" type="text" name="ifenol" autocomplete="off"/></td></tr>
		  <tr><td><strong>Patente </strong></td><td><input class="contact" type="number" name="ipatano"  placeholder="2020"  min="2000" max="2021"/></td></tr>
		  <tr><td><strong>Photo</strong></td><td><input class="contact" type="url" name="iimg" autocomplete="off"/></td></tr>
		  
		  
		</table>  
		
		     <button type="submit" name="ingresar1">Ingresar</button>
			  <button type="reset">Borrar</button>
   	</form>
	</div>
		
<?php
		if (isset($_POST['ingresar1'])) 
		{
           if (strlen($_POST['iindex']) >= 1 && ($_POST['icolection']) >= 1 && strlen($_POST['ipais']) >= 1 && strlen($_POST['iprovince']) >= 1) 
		   {
			   
	           $iindex = trim($_POST['iindex']);
			   $icolection = trim($_POST['icolection']);
			   $family = trim($_POST['family']);
			   $itaxon = trim($_POST['itaxon']);
			   $iautor = trim($_POST['iautor']);
			   $idetermined = trim($_POST['idetermined']);
			   $ipais = trim($_POST['ipais']);
			   $iprovince = trim($_POST['iprovince']);
			   $ilower = trim($_POST['ilower']);
			   $ivinicity = trim($_POST['ivinicity']);
			   $ielevation = trim($_POST['ielevation']); 
			   $icordinates = trim($_POST['icordinates']); 
			   $icordinatesx = trim($_POST['icordinatesx']);
			   $icordinatesy = trim($_POST['icordinatesy']);
			   $icolectors = trim($_POST['icolectors']);
			   $iherbarium = trim($_POST['iherbarium']);
			   $iColdate = trim($_POST['iColdate']);
			   $idesc = trim($_POST['idesc']);
			   $ifenol = trim($_POST['ifenol']);
			   $ipatano = trim($_POST['ipatano']);
			   $iimg = trim($_POST['iimg']);
			   
			   
			   
			   $consulta = "INSERT INTO xxxxxx (indexautor, idcoleccion, family, taxon, autor, determby, pais, provincia, lower, vinicity, elevation, coordinates, cordinatesx, cordinatesy, colectors, colectdate, herbar, descrip, fenol, patente, img) VALUES ('$iindex','$icolection','$family','$itaxon','$iautor','$idetermined','$ipais','$iprovince','$ilower','$ivinicity','$ielevation','$icordinates','$icordinatesx','$icordinatesy', '$icolectors','$iColdate','$iherbarium','$idesc','$ifenol','$ipatano','$iimg')";
			   
			   if (mysqli_query($mysqli,$consulta)){
                    echo '<script language="javascript">alert("¡ingresado correctamente!");window.location="admin2.php"</script>';
				    
	              } else
				    {
                     echo '<script language="javascript">alert("¡Ups ha ocurrido un error!");</script>'  .$consulta."<br>" .mysqli_error($mysqli) ;

	                }
			   mysqli_close($mysqli);
           }   
			else 
			{
               echo '<script language="javascript">alert("¡Por favor complete los campos y verifique !");</script>';
             }
       }

?>
		
    <div id="site_content_bottom"></div>
    </div>
    <div id="footer">Copyright &copy; ESPOCH. TODOS LOS DERECHOS RESERVADOS. | <a href="http://espoch.edu.ec">ESPOCH</a>  |  <a> <li>2025</a>|<a href="http://biblioteca.espoch.edu.ec"> DBRAI </a> </div>
	</div>
  </body>
</html>
