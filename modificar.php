<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:login.html");
}elseif ($_SESSION['id']==1) {
	header("Location:admin2.php");
}

require_once("config/frmConfig.php");
$ruta = new classConfig();
$dirSelect = $ruta->rutaSelect();
$vecTodos = json_decode(file_get_contents($dirSelect.'opc=verDatos&&cual=1'), true );

if(isset($_POST['btnBuscar'])){
	$vecTodos = json_decode(file_get_contents($dirSelect.'opc=verEspecifico1&&dato1='.$_POST["txtTaxon"].'&&dato2='.$_POST["family"].'&&dato3='.$_POST["colector"].'&&dato4='.$_POST["provincia"].'&&dato5='.$_POST["canton"].'&&dato6='.$_POST["elevation"].'&&dato7='.$_POST["rango"]), true);
}
else
	$vecTodos = json_decode(file_get_contents($dirSelect.'opc=verDatos&&cual=1'), true );
?>


<html lang="en">
<head>
	<title>ESCUELA SUPERIOR POLITÉCNICA DE CHIMBORAZO</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="website description" />
	<meta name="keywords" content="website keywords, website keywords" />
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="icon" type="image/png" href="style/espoch.png">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	
	
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

					<li><a href="mostrar.php" target="_blank">Mostrar</a></li>
					<li><a href="desconectar.php">Salir</a></li>
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

					DEBRA:
					<p>direcciondbrai@espoch.edu.ec</p>
					<img src="style/logo_herbario.jpg" alt="Logo Herbario" />
				</div>
				<div id="content">
					<h1><strong>Bienvenidos a la base de datos del Herbario de la ESPOCH</strong></h1>
					<p align="justify">Aquí podrá localizar y visualizar todos los datos de los especímenes que se encuentran reposando en nuestro herbario institucional.</p>
					<h2><strong>Búsqueda</strong></h2>
					<p align="justify">La búsqueda la puede realizar por parámetros de forma individual y si requeriré de una búsqueda mas especifica coloque mayor cantidad de parámetros de búsqueda.</p>

					<form name="contact" method="POST" action="modificar.php">
					<table class="uno" id="tablebonita" width="auto" cellpadding="2" cellspacing="5"  border="5" bordercolor="#5AAD8C">
						<tr><th></th><th>Ingrese parámetros de búsqueda </th></tr>

						<tr><td><strong>Taxon</strong></td><td><input class="contact" name="txtTaxon"   pattern="\S(.*\S)?" title="sin espacios en blanco al inicio o al final" autocomplete="on"/></td></tr>

						<tr><td><strong>Family</strong></td><td><input class="contact" type="text" name="family" pattern="\S(.*\S)?" title="sin espacios en blanco al inicio o al final" autocomplete="on"/></td></tr>

						<tr><td><strong>Index</strong></td><td><input class="contact" type="text"    name="colector" pattern="\S(.*\S)?" title="sin espacios en blanco al inicio o al final" autocomplete="on" /></td></tr>


						<tr><td><strong>Province</strong></td><td><input class="contact" type="text" name="provincia" autocomplete="on" pattern="\S(.*\S)?" title="sin espacios en blanco al inicio o al final" /></td></tr>

						<tr><td><strong>Lower Political</strong></td><td><input class="contact" type="text" name="canton" pattern="\S(.*\S)?" title="sin espacios en blanco al inicio o al final" autocomplete="on" /></td></tr>

						<tr><th>Por rango de elevación</th></tr>
						<tr><td><select name="rango" id ="rango" style="width:auto">
							<option selected value = "escoja">escoja en metros</option>
							<option value = "1" >Igual a </option>
							<option value = "2">Mayor a</option>
							<option value = "3">Menor a</option></td>
							<td><input class="contact" type="number"   name="elevation"/></td> </tr>
						</table>  
						<button type="submit" name="btnBuscar">Buscar</button>
						<button type="reset">Borrar</button>
					</form>

					</div>	


					<table id ="mostrar" class="display" align="center" bordercolor="#5AAD8C" border="5" style="width:auto" cellpadding="2" cellspacing="2">
					<thead>
						<tr>
							<th>N Cartulina</th>
							<th>Index</th>
							<th>N Colecion</th>
							<th>Family</th>
							<th>Taxon</th>
							<th>Province</th>
							<th>Lower political</th>
							<th>Elevation(m)</th>
						</tr>	
					</thead>
					<?php
					if($vecTodos['resultado']){
						for($j=0; $j<count($vecTodos['respDatos']); $j++){
							echo '<tr align="center">
							<td> <a href="modificardetalle.php?variable1='.$vecTodos['respDatos'][$j]['idcartulina'].'" target="_blank"> '.$vecTodos['respDatos'][$j]['idcartulina'].'</a></td>
							<td><a href="modificardetalle.php?variable1='.$vecTodos['respDatos'][$j]['idcartulina'].'" target="_blank">'.$vecTodos['respDatos'][$j]['indexautor'].'</a></td>
							<td><a href="modificardetalle.php?variable1='.$vecTodos['respDatos'][$j]['idcartulina'].'" target="_blank">'.$vecTodos['respDatos'][$j]['idcoleccion'].'</a></td>
							<td><a href="modificardetalle.php?variable1='.$vecTodos['respDatos'][$j]['idcartulina'].'" target="_blank">'.$vecTodos['respDatos'][$j]['family'].'</a></td>
							<td><a href="modificardetalle.php?variable1='.$vecTodos['respDatos'][$j]['idcartulina'].'" target="_blank">'.$vecTodos['respDatos'][$j]['taxon'].'</a></td>
							<td><a href="modificardetalle.php?variable1='.$vecTodos['respDatos'][$j]['idcartulina'].'" target="_blank">'.$vecTodos['respDatos'][$j]['provincia'].'</a></td>
							<td><a href="modificardetalle.php?variable1='.$vecTodos['respDatos'][$j]['idcartulina'].'" target="_blank">'.$vecTodos['respDatos'][$j]['lower'].'</a></td>
							<td><a href="modificardetalle.php?variable1='.$vecTodos['respDatos'][$j]['idcartulina'].'" target="_blank">'.$vecTodos['respDatos'][$j]['elevation'].'</a></td>
							</tr>';
						}
					}
					?>
					<tfoot>
						<tr>
							<th>N Cartulina</th>
							<th>Index</th>
							<th>N Colecion</th>
							<th>Family</th>
							<th>Taxon</th>
							<th>Province</th>
							<th>Lower political</th>
							<th>Elevation(m)</th>
						</tr>
					</tfoot>

				</table>






					<div id="site_content_bottom"></div>
				</div>
				<div id="footer">Copyright &copy; ESPOCH. TODOS LOS DERECHOS RESERVADOS. | <a href="http://espoch.edu.ec">ESPOCH</a>  |  <a ><li>2025</a>|<a href="http://biblioteca.espoch.edu.ec"> DBRA </a> </div>
				</div>
			</body>
			<script src="./js/jquery-3.5.1.js"></script>
			<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
			<script src="js/app.js"></script>
			</html>
