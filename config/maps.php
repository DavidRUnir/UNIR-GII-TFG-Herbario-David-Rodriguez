<!DOCTYPE html>
<html lang="en">
<head>
  <title>ESCUELA SUPERIOR POLITÉCNICA DE CHIMBORAZO</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="icon" type="image/png" href="style/espoch.png">
	 <script src="https://maps.googleapis.com/maps/api/js"></script>
	
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
          <li><a href="mostrar.php">ESPECÍMENES</a></li>
          <li><a href="contacto.html">CONTACTO</a></li>
		  <li class="tab_selected"><a href="maps.php">Localización</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="panel" align="center"><img src="style/espochbv.png" alt="autoridades" /></div>
      <div id="content">
        <h1>MAPS</h1>
		 	<?php
    
        $latitude = $_GET['variable1'];
        $longitude = $_GET['variable2'];
		  $vinicity = $_GET['variable3'];
		  $coordinate = $_GET['variable4'];
		  
		    
		  
        ?>
 
		  
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude;?>&z=12&output=embed" frameborder="0" style="border:0" allowfullscreen> </iframe> 
		  
		  <table class="uno" id="tablebonita" width="auto" cellpadding="6" cellspacing="10" border="10" bordercolor=" #B5B5B5" bgcolor="aliceblue ">
          <tr><th></th><th align="center">Location</th></tr>
			  
		<?php  
		  echo'
		  
		  <tr><td><strong>Vicinity </strong></td> <td  align="center" ><input type="text" style="background-color: white" value="'.$vinicity.'" disabled /></td></tr>
		  
		  <tr><td><strong>Latitude </strong></td> <td  align="center" ><input type="text" style="background-color: white" value="'.$latitude.'" disabled /></td></tr>
		  
		  <tr><td><strong>Longitude</strong></td> <td  align="center" ><input type="text" style="background-color: white" value="'.$longitude.'" disabled /></td></tr>
		  
		  <tr><td><strong>Coordinates</strong></td> <td  align="center" ><input type="text" style="background-color: white" value="'.$coordinate.'" disabled /></td></tr>
		  
		  '
		  
        ?>
		  

		  
		  
     </table>
		 </div> 
	 </div>
    <div id="footer">Copyright &copy; ESPOCH. TODOS LOS DERECHOS RESERVADOS. | <a href="http://espoch.edu.ec">ESPOCH</a>  |  <a> <li>2025</a>|<a href="http://biblioteca.espoch.edu.ec"> DBRA </a> </div>
   </div>
 </body>
</html>
