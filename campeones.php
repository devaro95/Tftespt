<html lang="es">

<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" href="static/originales/icono.ico" />
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
	<meta name="description" content="¡Aquí encontrarás toda la información que necesitas sobre Teamfight Tactics!" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="static/style/style.css?n=1">
	<link rel="stylesheet" type="text/css" href="static/style/campeones.css?n=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type=" text/javascript" src="static/js/campeones.js"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-3261656417999696",
			enable_page_level_ads: true
		});
	</script>

	<title>Inicio - TFTESP</title>
	<link rel="shortcut icon" href="static/originales/logoblanco.png" />

	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>
	<meta http-equiv='pragma' content='no-cache'>

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@tftesp">
	<meta name="twitter:creator" content="@tftesp">
	<meta name="twitter:title" content="TftEsp.com">
	<meta name="twitter:description"
		content="Conoce la mejor guía de TFT en español y ponte al tanto de las actualizaciones más recientes.">
	<meta name="twitter:image:src" content="https://tftesp.com/fotos_head/bienvenidos.png">

</head>

<body id="inicio">
	<div style="display: block;">
		<div style="margin:auto; width:65%">
			<div style="display:flex;">
				<a href="https://twitter.com/TFT_Esp">
					<div id="rightbar"><img src="static/originales/twitter.png" style="width:18px; padding-top:18px;">
					</div>
				</a>
				<a href="https://www.instagram.com/tftesp/">
					<div id="rightbar"><img src="static/originales/instagram.png" style="width:34px; padding-top:8px;">
					</div>
				</a>
			</div>
			<div style="text-align:center; margin-bottom:15px;">

				<a href="index.php">
					<img src="static/originales/logo.png" style="width:180px">
				</a>
			</div>
			<div style="text-align:center;margin-bottom:20px;">
				<b style="font-size:18px;">
					<font style="color:#c9aa71; ">TEAMFIGHT TACTICS</font> EN ESPAÑOL
				</b>
			</div>
		</div>
		<div id="navbar">
			<div id="midbar">
				<a class="navbarlink" href="index">INICIO</a>
				<a class="navbarlink" style="color:#c9aa71!important;" href="campeones">CAMPEONES</a>
				<a class="navbarlink" href="objetos">OBJETOS</a>
				<a class="navbarlink" href="clases">CLASES Y ORIGENES</a>
				<a class="navbarlink" href="composiciones">COMPOSICIONES</a>
				<a class="navbarlink" href="constructor">CONSTRUCTOR DE EQUIPO</a>
				<a class="navbarlink" href="tabladelideres">RANKING</a>
			</div>

			<a href="https://tftesp.com/noticia.php?s=notas-parche917">
				<div id="rightbar" style="padding-top:21px; font-size:15px;"><u>Parche: 9.17</u></div>
			</a>
		</div>
		<script>
			jQuery(document).ready(function ($) {
				$(".clickable-row").click(function () {
					window.location = $(this).data("href");
				});
			});
		</script>
		<table id="campeones">
			<thead>
				<tr>
					<th style="width:10%">Tier</td>
					<th style="width:18%;">Nombre campeón</td>
					<th style="width:10%">Clase/Origen</td>
					<th style="width:10%">Coste</td>
					<th style="width:7%">Vida</td>
					<th style="width:7%">Armadura</td>
					<th style="width:7%">MR</td>
					<th style="width:7%">DPS</td>
					<th style="width:7%">Daño</td>
					<th style="width:7%">Vel. Atq.</td>
					<th style="width:9%">Rango</td>
				</tr>
			</thead>
			<tbody>
				<?php
						$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
						mysqli_set_charset($enlace, 'UTF8');
						$resultado = $enlace->query('select * from campeones order by tier');
						while($fila = $resultado->fetch_assoc()){ ?>
				<tr class='clickable-row' data-href="campeon.php?campeon=<?php print $fila['nombre']; ?>">

					<td><?php echo '<img src="static/tier/'.$fila['tier'].'.png" alt="'. $fila['tier'] .'"/>'?><span
							class="hidetext"><?php echo $fila['tier']?></span></td>
					<td class="leftside">
						<?php echo '<img src="static/campeones/'.$fila['id'].'.png" class="champicon" alt="'. $fila['nombre'] .'"/>'?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fila['nombre']?></img></td>
					<td>
						<?php 
								$resultado2 = $enlace->query('select * from campeones_clases where id_campeon ='. $fila['id']);
								while($fila2 = $resultado2->fetch_assoc()){
									$resultado3 = $enlace->query('select * from clases where id ='. $fila2['id_clase']);
									$fila3 = $resultado3->fetch_assoc();
									echo '<img src="static/clases/'.$fila2['id_clase'].'.png" class="oriclasicon" title="'.$fila3['nombre'].'" />';
								}
							?>
					</td>
					<td><img src="static/originales/oro.png" class="oroicon"><?php echo $fila['precio']?></img></td>
					<td><?php echo $fila['vida']?></td>
					<td><?php echo $fila['armadura']?></td>
					<td><?php echo $fila['rm']?></td>
					<td><?php echo $fila['dps']?></td>
					<td><?php echo $fila['dano']?></td>
					<td><?php echo $fila['vda']?></td>
					<?php
							if($fila['rango'] == 1){
								echo '<td style="font-size: 25px"><b style="color:rgb(201,170,113)">|</b>||||<span class="hidetext">'. $fila['rango'] .'</span></td>';
							}elseif($fila['rango'] == 2){
								echo '<td style="font-size: 25px"><b style="color:rgb(201,170,113)">||</b>|||<span class="hidetext">'. $fila['rango'] .'</span></td>';
							}elseif($fila['rango'] == 3){
								echo '<td style="font-size: 25px"><b style="color:rgb(201,170,113)">|||</b>||<span class="hidetext">'. $fila['rango'] .'</span></td>';
							}elseif($fila['rango'] == 4){
								echo '<td style="font-size: 25px"><b style="color:rgb(201,170,113)">||||</b>|<span class="hidetext">'. $fila['rango'] .'</span></td>';
							}elseif($fila['rango'] == 5){
								echo '<td style="font-size: 25px"><b style="color:rgb(201,170,113)">|||||</b><span class="hidetext">'. $fila['rango'] .'</span></td>';
							}
								
							?>

				</tr>

				<?php
						}
						mysqli_close($enlace);
					?>
			</tbody>
		</table>
		<div id="footer">
			<div style="width: 33%; margin-top:30px;">
				<div style="width: 415px; margin-top:10px; margin-left:10px; text-align:center;"><img
						src="static/originales/logoblanco.png" style="width:35%"></img></div>
				<p1 align="bottom" style="margin-left: 120px; ">© 2019 www.tftesp.com<p1></p1>
			</div>
			<div style="width: 33%;">
				<div style="text-align: center; margin-top: 45px;">
					Teamfight Tactics ESP se creó según la política "Galimatías legal" de Riot Games usando
					recursos que
					son propiedad de Riot Games. Riot Games no respalda ni patrocina este proyecto.
				</div>
			</div>
			<div style="width: 33%; text-align: center;">
				<div style="margin-top:45px;">
					<div style="align-items: center;display: flex;width: 30px; margin-left:155px;">
						<div>
							<a href="https://twitter.com/TFT_Esp" target="_blank">
								<img src="static/originales/twitterblanco.png" style="width:55px;">
							</a>
						</div>
						<div>
							<a href="https://www.instagram.com/tftesp/" target="_blank">
								<img src="static/originales/instagramblanco.png" style="width:80px;">
							</a>
						</div>
					</div>
					<div style="font-size: 10px;margin-top:10px; color:white;">
						<u><a href="contactar.php" style="color:white!important;">Contacto</a></u> /
						<u><a href="politica-de-privacidad.php" style="color:white!important;">Politica de
								privacidad</a></u> /
						<u><a href="terminos-y-condiciones.php" style="color:white!important;">Terminos y
								condiciones</a></u>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>