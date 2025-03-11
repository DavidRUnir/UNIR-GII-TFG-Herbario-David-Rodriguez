<?php
require_once("config/frmConfig.php");
$ruta = new classConfig();
$dirSelect = $ruta->rutaSelect();
$vecBuscar = json_decode(file_get_contents($dirSelect.'opc=verUnDato&&cual=1&&dato='.$_GET['variable1']), true );
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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
	<script src="alertifyjs/alertify.js"></script>
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

					DBRA:
					<p>direcciondbrai@espoch.edu.ec</p>
					<img src="style/logo_herbario.jpg" alt="Logo Herbario" />
				</div>
				<div id="content">
					<h1><strong>Bienvenidos a la base de datos del Herbario de la ESPOCH</strong></h1>
					<p align="justify">Aquí podrá modificar todos los datos del especímen seleccionado que se encuentran reposando en nuestro herbario institucional.</p>

					<form name="contact" method="POST" action="modificardetalle1.php">

						<table class="uno" id="tablebonita" width="auto" cellpadding="6" cellspacing="10" border="10" bordercolor=" #B5B5B5" bgcolor="aliceblue ">
							<tr><th></th><th align="center">Datos de Especímen Detallado </th></tr>

							<?php
								echo'
								<tr><td><strong>Number Id </strong></td> <td  align="center" ><input type="text" id="txtId" style="background-color: white"  name="iid" value="'.$vecBuscar['respDatos'][0]['idcartulina'].'" disabled /></td></tr>

								<tr><td><strong>Index </strong></td> <td  align="center" ><input type="text" id="txtAutor" style="background-color: white" name="iindex" value="'.$vecBuscar['respDatos'][0]['indexautor'].'"  /></td></tr>

								<tr><td><strong>Collector Number</strong></td> <td  align="center" ><input type="text" id="txtNumColector" style="background-color: white" name="icolection" value="'.$vecBuscar['respDatos'][0]['idcoleccion'].'"  /></td></tr>

								<tr><td><strong>Family</strong></td> <td  align="center" ><input type="text" id="txtFamily" style="background-color: white" name="family" value="'.$vecBuscar['respDatos'][0]['family'].'"  /></td></tr>

								<tr><td><strong>Taxon</strong></td> <td  align="center" ><input type="text" id="txtTaxon" style="background-color: white"  name="itaxon" value="'.$vecBuscar['respDatos'][0]['taxon'].'"  /></td></tr>

								<tr><td><strong>Author</strong></td> <td  align="center" ><input type="text" id="txtNombAutor" style="background-color: white" name="iautor" value="'.$vecBuscar['respDatos'][0]['autor'].'"  /></td></tr>

								<tr><td><strong>Determined By </strong></td> <td  align="center" ><input type="text" id="txtDeterminado" style="background-color: white" name="idetermined" value="'.$vecBuscar['respDatos'][0]['determby'].'"  /></td></tr>

								<tr><td><strong>Country</strong></td> <td  align="center" ><input type="text" id="txtCountry" style="background-color: white" name="ipais" value="'.$vecBuscar['respDatos'][0]['pais'].'"  /></td></tr>

								<tr><td><strong>Province</strong></td> <td  align="center" ><input type="text" id="txtProvincia" style="background-color: white" name="iprovince" value="'.$vecBuscar['respDatos'][0]['provincia'].'"  /></td></tr>

								<tr><td><strong>Lower Political</strong></td> <td  align="center" ><input type="text" id="txtLower" style="background-color: white" name="ilower" value="'.$vecBuscar['respDatos'][0]['lower'].'"  /></td></tr>

								<tr><td><strong>Vicinity</strong></td> <td  align="center" ><input type="text" id="txtVinicity" style="background-color: white" name="ivinicity" value="'.$vecBuscar['respDatos'][0]['vinicity'].'"  /></td></tr>

								<tr><td><strong>Elevation</strong></td> <td  align="center" ><input type="text" id="txtElevacion" style="background-color: white" name="ielevation" value="'.$vecBuscar['respDatos'][0]['elevation'].'"  /></td></tr>

								<tr><td><strong>Coordinates</strong></td> <td  align="center" ><input type="text" id="txtCoordenadas"  style="background-color: white"  name="icordinates" value="'.$vecBuscar['respDatos'][0]['coordinates'].'"/></td></tr>

								<tr><td><strong>Latitude</strong></td> <td  align="center" ><input type="text" id="txtLatitud"  style="background-color: white" name="icordinatesx" value="'.$vecBuscar['respDatos'][0]['cordinatesx'].'"/></td></tr>

								<tr><td><strong>Longitude</strong></td> <td  align="center" ><input type="text" id="txtLongitud" style="background-color: white" name="icordinatesy" value="'.$vecBuscar['respDatos'][0]['cordinatesy'].'"  /></td></tr>

								<tr><td><strong>Collectors</strong></td> <td  align="center" ><input type="text" id="txtColector" style="background-color: white" name="icolectors" value="'.$vecBuscar['respDatos'][0]['colectors'].'"  /></td></tr>

								<tr><td><strong>Collection Date</strong></td> <td  align="center" ><input type="text" id="txtColFecha" style="background-color: white" name="iColdate"  value="'.$vecBuscar['respDatos'][0]['colectdate'].'" /></td></tr>

								<tr><td><strong>Herbarium</strong></td> <td  align="center" ><input type="text" id="txtHerbario" style="background-color: white" name="iherbarium" value="'.$vecBuscar['respDatos'][0]['herbar'].'" /></td></tr>

								<tr><td><strong>Specimen Description</strong></td> <td  align="center" ><input type="text" id="txtSpecimen" style="background-color: white" name="idesc" value="'.$vecBuscar['respDatos'][0]['descrip'].'" /></td></tr>

								<tr><td><strong>Phenology</strong></td> <td  align="center" ><input type="text" id="txtFenol" style="background-color: white" name="ifenol" value="'.$vecBuscar['respDatos'][0]['fenol'].'" /></td></tr>

								<tr><td><strong>Patente</strong></td> <td  align="center" ><input type="text" id="txtPatente" style="background-color: white" name="ipatano" value="'.$vecBuscar['respDatos'][0]['patente'].'" /></td></tr>

								<tr><td><strong>Photo</strong></td> <td  align="center" ><input type="text" id="txtFoto" style="background-color: white" name="iimg" value="'.$vecBuscar['respDatos'][0]['img'].'" /></td></tr>';
							?>

						</table>
						<button type="button" onclick="editarHerbario()" name="modificar1">Editar</button>
						<button type="reset">Borrar</button>

					</form>
				</div>


				
				<div id="site_content_bottom"></div>
			</div>
			<div id="footer">Copyright &copy; ESPOCH. TODOS LOS DERECHOS RESERVADOS. | <a href="http://espoch.edu.ec">ESPOCH</a>  |  <a> <li>2025</a>|<a href="http://biblioteca.espoch.edu.ec"> DBRA </a> </div>
			</div>
		</body>
		<script src="./js/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
		<script src="js/app.js"></script>
		<script type="text/javascript">
			function editarHerbario(){
				var vecData = [$('#txtAutor').val(), $('#txtNumColector').val(), $('#txtFamily').val(), $('#txtTaxon').val(), $('#txtNombAutor').val(), $('#txtDeterminado').val(), $('#txtCountry').val(), $('#txtProvincia').val(), $('#txtLower').val(), $('#txtVinicity').val(), $('#txtElevacion').val(), $('#txtCoordenadas').val(), $('#txtLatitud').val(), $('#txtLongitud').val(), $('#txtColector').val(), $('#txtColFecha').val(), $('#txtHerbario').val(), $('#txtSpecimen').val(), $('#txtFenol').val(), $('#txtPatente').val(), $('#txtFoto').val(), $('#txtId').val()];
				var valorPost = JSON.stringify(vecData);

				$.ajax({
					type: "POST",
					url: "config/frmEditar.php",
					data: "editaHerbario=" + valorPost,
					dataType: "html",
					success: function (data) {
						var datos = JSON.parse(data);
						if (datos.resultado) {
							alertify.success("información actualizada correctamente.");
							setTimeout("history.back();", 2000);
						}
						else
							alertify.error("No se pudo procesar intente más tarde.");
					},
					error: function (data) {
						alertify.error("ERROR. al procesar intente más tarde.");
					}
				});
			}
		</script>
		</html>
