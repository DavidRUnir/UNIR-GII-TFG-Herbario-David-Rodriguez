<?php
    session_start();
	if (@!$_SESSION['user']) {
		header("Location:login.html");
	}elseif ($_SESSION['id']==1) {
		header("Location:admin2.php");
	}
include("connect_db.php");
$id = $_GET["id"];




$conexion= new MySQLi($host, $adminbd, $pss, $bd);
if ($conexion -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" .$mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else


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
          
		  <li><a href="ingresarnuevo.php">Ingresar Nuevo</a></li>
          <li class="tab_selected"><a href="modificar.php">Modificar</a></li>
          
          <li><a href="especimenes.html">Mostrar</a></li>
		  <li><a href="desconectar.php">Salir</a></li>
		</ul>
      </div>
    </div>
    <div id="site_content">
      <div id="panel"><img src="style/ingreso.png" alt="tree tops" /></div>
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
		
		
		
		
		
		
		<?php
		 $herbarioe = "SELECT * FROM berbarioespoch WHERE idcartulina = $id";
	
		$resherbarioe=$conexion->query($herbarioe);
			
			
			
		while ($registroherbario = $resherbarioe -> fetch_array(MYSQLI_BOTH))
		{
			}
		
		 ?>
			
			  
		
		
		
		
		
		
		
		
		
      <div id="content">
		<h1><strong>Modificar Especímen</strong></h1>
		  
		  <form name="contact" method="POST" action="modificar.php">
		   <table width="auto" cellpadding="0" cellspacing="0">
          <tr><th></th><th>Ingrese datos </th></tr>
          <tr><td><strong>Index</strong><br>
          ()<br></td><td><input class="contact" type="text" name="iindex" autocomplete="on" 
		value="' . $_POST['iindex'] . '" required /></td></tr>
          <tr><td><strong>Colection</strong> <br>
          ()<br></td><td><input class="contact" type="number" name="icolection" autocomplete="on" required/></td></tr>
		  <tr><td><strong>Family</strong><br>
	      ()<br></td><td><input class="contact" type="text" name="family" autocomplete="on" /></td></tr>
		  <tr><td><strong>Taxon</strong><br>
	      ()<br></td><td><input class="contact" type="text" name="itaxon" autocomplete="on" /></td></tr>
		  <tr><td><strong>Autor</strong><br>
	      <br></td><td><input class="contact" type="text" name="iautor" autocomplete="on" /></td></tr>
		  <tr><td><strong>Determined by</strong><br>
          ()<br></td><td><input class="contact" type="text" name="idetermined" autocomplete="on" /></td></tr>
		  <tr><td><strong>País</strong><br>
          ()<br></td><td><input class="contact" type="text" name="ipais"  autocomplete="on" required/></td></tr>
		  <tr><td><strong>Province</strong><br>
          ()<br></td><td><input class="contact" type="text" name="iprovince"  autocomplete="on" required/></td></tr>
		  <tr><td><strong>Lowe Political</strong><br>
          ()<br></td><td><input class="contact" type="text" name="ilower"  autocomplete="on"/></td></tr>
		  <tr><td><strong>Vinivity</strong><br>
          ()<br></td><td><input class="contact" type="text" name="ivinicity" autocomplete="on" /></td></tr>
		  <tr><td><strong>Elevation</strong> <br>
          ()<br></td><td><input class="contact" type="number" name="ielevation" autocomplete="on" /></td></tr>
		  <tr><td><strong>Coordinates</strong><br>
	      ()<br></td><td><input class="contact" type="text" name="icordinates" autocomplete="off"/></td></tr>
		  <tr><td><strong>Colectors</strong><br>
	      ()<br></td><td><input class="contact" type="text" name="icolectors" autocomplete="on" /></td></tr>
		  <tr><td><strong>Colection Date</strong><br>
	      <br></td><td><input class="contact" type="text" name="iColdate" /></td></tr>
		  <tr><td><strong>Herbarium</strong><br>
          ()<br></td><td><input class="contact" type="text" name="iherbarium" autocomplete="on"/></td></tr>
		  <tr><td><strong>Descrption</strong><br>
          ()<br></td><td><input class="contact" type="text" name="idesc" autocomplete="on"/></td></tr>
		  <tr><td><strong>Fenology</strong><br>
          ()<br></td><td><input class="contact" type="text" name="ifenol" autocomplete="off"/></td></tr>
		  <tr><td><strong>Patente </strong><br>
          (año)<br></td><td><input class="contact" type="number" name="ipatano"  placeholder="2020"  min="2000" max="2021"/></td></tr>
		  <tr><td><strong>Imagen</strong><br>
          (url de la imagen)<br></td><td><input class="contact" type="url" name="iimg" autocomplete="off"/></td></tr>
		  
		  
		</table>  
		
		     <button type="submit" name="ingresar1">Modificar</button>
			  <button type="reset">Borrar</button>
   	</form>
	</div>
		

		<?php	   
			   
			   
			   
			   
			   mysqli_close($mysqli);
           
			

?>
		
    <div id="site_content_bottom"></div>
    </div>
    <div id="footer">Copyright &copy;ESPOCH. TODOS LOS DERECHOS RESERVADOS. | <a href="http://espoch.edu.ec">ESPOCH</a> | <a ><li>2025</li> | <a href="http://bibliotecas.espoch.edu.ec/bdatos.html"> DBRA </a></div>
	</div>
  </body>
</html>
