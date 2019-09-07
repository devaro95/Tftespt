<html lang="es">

<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" href="static/originales/icono.ico" />
	<meta name="description" content="¡Aquí encontrarás toda la información que necesitas sobre Teamfight Tactics!" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="static/style/style.css?n=1">
	<link rel="stylesheet" type="text/css" href="static/style/objetos.css?n=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<script type=" text/javascript" src="static/js/objetos.js"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-3261656417999696",
			enable_page_level_ads: true
		});
	</script>
	<title>Objetos - TFTESP</title>
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
	<meta name="twitter:image:src" content="https://tftesp.com/fotos_head/banner-twitter.jpg">

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
				<a class="navbarlink" href="campeones">CAMPEONES</a>
				<a class="navbarlink" style="color:#c9aa71!important" href="objetos">OBJETOS</a>
				<a class="navbarlink" href="clases">CLASES Y ORIGENES</a>
				<a class="navbarlink" href="composiciones">COMPOSICIONES</a>
				<a class="navbarlink" href="constructor">CONSTRUCTOR DE EQUIPO</a>
				<a class="navbarlink" href="tabladelideres">RANKING</a>
			</div>

			<a href="https://tftesp.com/noticia.php?s=notas-parche917">
				<div id="rightbar" style="padding-top:21px; font-size:15px;"><u>Parche: 9.17</u></div>
			</a>
		</div>
		<div style="text-align: center;text-align: center;width: 1350px;margin: auto; margin-top: 3%;">
			<?php
					$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
					mysqli_set_charset($enlace, 'UTF8');
					$contador = 1;
					while($contador <= 8){
					$resultado = $enlace->query('select * from objetos where id = ' . $contador);
					$fila = $resultado->fetch_assoc();
				?>
			<div class="container">
				<div class="itemTitle">
					<div class="itemImage"
						style="background: url('static/objetos/<?php echo $contador ?>.png')no-repeat center; background-size: cover">
					</div>
					<div class="descTitle">
						<b><?php echo $fila['nombre'] ?> </b> <br> <?php echo $fila['descripcion'] ?>
					</div>
				</div>
				<div>
					<div><?php
								$contador2 = 1;
								
								while($contador2 <= 8){ 
									$resultado = $enlace->query('select * from objetos where id = ' . $contador);
									$fila = $resultado->fetch_assoc();
	
									$resultado2 = $enlace->query('select * from objetos_fusion where id_objeto_1 = ' . $contador . ' and id_objeto_2 = ' . $contador2);
									$fila2 = $resultado2->fetch_assoc();
	
									$resultado3 = $enlace->query('select * from objetos where id = ' . $fila2['id_objeto_final']);
									$fila3 = $resultado3->fetch_assoc();
									
								?>
						<div class="subContainer">
							<div class="subItem"
								style="background: url('static/objetos/<?php echo $contador2 ?>.png')no-repeat center; background-size: cover">
							</div>
							<div class="guion">=</div>
							<div class="subItem"
								style="background: url('static/objetos/<?php echo $fila2['id_objeto_final'] ?>.png')no-repeat center; background-size: cover">
							</div>
							<div class="descItem"><?php echo $fila3['descripcion'] ?></div>
						</div>
						<?php
									$contador2 = $contador2 + 1;
								}
								?>

					</div>
				</div>
			</div>
			<?php
							$contador = $contador + 1;
						}
						mysqli_close($enlace);
				?>
			<div id="itemList">
				<div style="min-width:600px;height:510px;">
					<div style="display: flex; width:98%;margin:auto;padding-top: 10px">
						<div style="width:120px; margin-top: 55px; margin-right: 10px;">
							<?php
										$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
										$resultado = $enlace->query('select * from objetos where id<9');
										while($fila = $resultado->fetch_assoc()){ 
											print "
											<div class='basicosLeft'><div class='cajaBoton'><button onclick='eliminarItem(".$fila['id'].")'>-</button></div><img style='width:50px;' src=static/objetos/" .$fila['id'].".png><div style='height: 50%;margin: auto 10px auto 0'><button onclick='anadirItem(".$fila['id'].")'>+</button></div><div id='numero$fila[id]' style='height: 50%;margin:auto;margin-left: -5px; font-size: 20px;color:black'>0</div></div>
											";
										}
									?>
						</div>
						<div>
							<div style="display: flex">
								<?php
										$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
										$resultado = $enlace->query('select * from objetos where id<9');
										while($fila = $resultado->fetch_assoc()){ 
											print "
											<div class='objetosCons'><img  src=static/objetos/" .$fila['id'].".png></div>
											";
										}
										?>
							</div>
							<div id="a1123hhad">
								<div style="display: flex">
									<?php
										$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
										$resultado = $enlace->query('select * from objetos_fusion where id_objeto_1=1 order by id_objeto_2');
										while($fila = $resultado->fetch_assoc()){ 
											print "
											<div class='objetosCons' ><img id=".$fila['id_objeto_final']."  src=static/objetos/" .$fila['id_objeto_final'].".png></div>
											";
										}
										?>
								</div>
								<div style="display: flex">
									<?php
										$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
										$resultado = $enlace->query('select * from objetos_fusion where id_objeto_1=2 order by id_objeto_2');
										while($fila = $resultado->fetch_assoc()){ 
											print "
											<div class='objetosCons'><img id=".$fila['id_objeto_final']."  src=static/objetos/" .$fila['id_objeto_final'].".png></div>
											";
										}
										?>
								</div>
								<div style="display: flex">
									<?php
											$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
											$resultado = $enlace->query('select * from objetos_fusion where id_objeto_1=3 order by id_objeto_2');
											while($fila = $resultado->fetch_assoc()){ 
												print "
												<div class='objetosCons'><img id=".$fila['id_objeto_final']."  src=static/objetos/" .$fila['id_objeto_final'].".png></div>
												";
											}
										?>
								</div>
								<div style="display: flex">
									<?php
											$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
											$resultado = $enlace->query('select * from objetos_fusion where id_objeto_1=4 order by id_objeto_2');
											while($fila = $resultado->fetch_assoc()){ 
												print "
												<div class='objetosCons'><img id=".$fila['id_objeto_final']."  src=static/objetos/" .$fila['id_objeto_final'].".png></div>
												";
											}
										?>
								</div>
								<div style="display: flex">
									<?php
											$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
											$resultado = $enlace->query('select * from objetos_fusion where id_objeto_1=5 order by id_objeto_2');
											while($fila = $resultado->fetch_assoc()){ 
												print "
												<div class='objetosCons'><img id=".$fila['id_objeto_final']."  src=static/objetos/" .$fila['id_objeto_final'].".png></div>
												";
											}
										?>
								</div>
								<div style="display: flex">
									<?php
											$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
											$resultado = $enlace->query('select * from objetos_fusion where id_objeto_1=6 order by id_objeto_2');
											while($fila = $resultado->fetch_assoc()){ 
												print "
												<div class='objetosCons'><img id=".$fila['id_objeto_final']."  src=static/objetos/" .$fila['id_objeto_final'].".png></div>
												";
											}
										?>
								</div>
								<div style="display: flex">
									<?php
											$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
											$resultado = $enlace->query('select * from objetos_fusion where id_objeto_1=7 order by id_objeto_2');
											while($fila = $resultado->fetch_assoc()){ 
												print "
												<div class='objetosCons'><img id=".$fila['id_objeto_final']."  src=static/objetos/" .$fila['id_objeto_final'].".png></div>
												";
											}
										?>
								</div>
								<div style="display: flex">
									<?php
											$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
											$resultado = $enlace->query('select * from objetos_fusion where id_objeto_1=8 order by id_objeto_2');
											while($fila = $resultado->fetch_assoc()){ 
												print "
												<div class='objetosCons'><img id=".$fila['id_objeto_final']."  src=static/objetos/" .$fila['id_objeto_final'].".png></div>
												";
											}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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