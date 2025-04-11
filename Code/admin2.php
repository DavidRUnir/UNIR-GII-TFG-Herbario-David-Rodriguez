<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:******");
}elseif ($_SESSION['id']==1) {
  header("Location:*****");
}
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
    <div id="header">
      <div id="logo">
        <a href="index.html"> <h1>DBRA - <span class="alternate_colour"> HERBARIO </span></h1></a>
      </div>
      <div id="menubar">
        <ul id="menu">
          
          <li><a href="ingresarnuevo.php">Ingresar Nuevo</a></li>
          <li><a href="modificar.php">Modificar</a></li>
          <li><a href="mostrar.php" target="_blank">Mostrar</a></li>
          <li><a href="desconectar.php">Salir</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="panel"><img src="style/espoch.jpg" alt="ESPOCH" /></div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>HERBARIO</h1>
        <h1>Bienvenido <strong><?php echo $_SESSION['user'];?></strong></h1>
        
      </div>
      

      
      
    </div>
    <div id="footer">Copyright &copy; ESPOCH. TODOS LOS DERECHOS RESERVADOS. | <a href="http://espoch.edu.ec">ESPOCH</a>  |  <a ><li>2025</a>|<a href="http://biblioteca.espoch.edu.ec"> DBRA </a> </div>
    </div>
  </body>
  </html>

  
  
  
