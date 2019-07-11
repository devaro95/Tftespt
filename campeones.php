<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8"/>
	<title>Campeones - TFTEsp</title>
	<meta name="description" content="¡Aquí encontrarás toda la información que necesitas sobre Teamfight Tactics!"/>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="stylechamps.css">
	<link rel="shortcut icon" href="/Campeones/img-navi-tft-513c71b5.svg" />
	<link rel="shortcut icon" href="Images/icono.ico" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<script type="text/javascript" src="jquery.tablesorter.js"></script>
	<script src="champsjavascript.js"></script>

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-3261656417999696",
			enable_page_level_ads: true
		});
	</script>
</head>

<body id="inicio">
	<div style="display: block;">
		<div id="navbar">
			<a href="/">
				<div id="leftbar"><img src="Images/newlogo.png" style="width:110px" alt="logo"></div>
			</a>
			<div id="midbar">
				<a class="navbarlink" href="index.php">INICIO</a>
				<a class="selected" href="campeones.php">CAMPEONES</a>
				<a class="navbarlink" href="items.html">OBJETOS</a>
				<a class="navbarlink" href="clases.html">CLASES Y ORIGENES</a>
				<a class="navbarlink" href="composiciones.html">COMPOSICIONES</a>
				<a class="navbarlink" href="constructor-de-equipo.html">CONSTRUCTOR DE EQUIPO</a>
			</div>
			<a href="https://twitter.com/TFT_Esp">
				<div id="rightbar"><img src="Images/twitter.png" style="width:18px; padding-top:18px;" alt="twitter"></div>
			</a>
		</div>
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
						$resultado = $enlace->query('select * from campeones order by tier');
						while($fila = $resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo '<img src="Images/icon-champtier-'.$fila['tier'].'.png" alt="'. $fila['tier'] .'"/>'?><span class="hidetext"><?php echo $fila['tier']?></span></td>
							<td class="leftside"><?php echo '<img src="static/campeones/'.$fila['id'].'.png" class="champicon" alt="'. $fila['nombre'] .'"/>'?>
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
							<td><img src="Images/oro.png" class="oroicon"><?php echo $fila['precio']?></img></td>
							<td><?php echo $fila['vida']?></td>
							<td><?php echo $fila['armadura']?></td>
							<td><?php echo $fila['rm']?></td>
							<td><?php echo $fila['dps']?></td>
							<td><?php echo $fila['dano']?></td>
							<td><?php echo $fila['vda']?></td>
							<?php
							if($fila['rango'] == 1){
								echo '<td style="font-size: 25px"><b style="color:white">|</b>||||<span class="hidetext">'. $fila['rango'] .'</span></td>';
							}elseif($fila['rango'] == 2){
								echo '<td style="font-size: 25px"><b style="color:white">||</b>|||<span class="hidetext">'. $fila['rango'] .'</span></td>';
							}elseif($fila['rango'] == 3){
								echo '<td style="font-size: 25px"><b style="color:white">|||</b>||<span class="hidetext">'. $fila['rango'] .'</span></td>';
							}elseif($fila['rango'] == 4){
								echo '<td style="font-size: 25px"><b style="color:white">||||</b>|<span class="hidetext">'. $fila['rango'] .'</span></td>';
							}elseif($fila['rango'] == 5){
								echo '<td style="font-size: 25px"><b style="color:white">|||||</b><span class="hidetext">'. $fila['rango'] .'</span></td>';
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
			<div style="float: left; height:100%;  min-width: 415px; ">
				<div style="width: 415px;  min-width: 415px; margin-top:10px; margin-left:10px;"><img
						src="Images/newlogo.png" style="width:50%">
				</div>
				<p1 align="bottom" style=" margin-left: 40px; ">© 2019 tftesp.com</p1>
			</div>
			<div style="width: 50%; height: 100%; float:left; text-align:center;">
				<div style="width:60%; margin:auto; margin-top: 45px;">
					Teamfight Tactics ESP se creó según la política "Galimatías legal" de Riot Games usando recursos que
					son propiedad de Riot Games. Riot Games no respalda ni patrocina este proyecto.
				</div>
			</div>
			<div style="float: left; height:100%; width: 20%; min-width:200px;">
				<div style="margin-top:45px;">Contacto: tftesp@gmail.com <br>
					<a href="https://twitter.com/TFT_Esp">
						<img src="Images/twitter.png" style="width:20px; padding-top:8px;">
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
<html>
