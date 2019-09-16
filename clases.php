<html lang="es">

<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" href="static/originales/icono.ico" />
	<meta name="description" content="¡Aquí encontrarás toda la información que necesitas sobre Teamfight Tactics!" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="static/style/style.css?n=1">
	<link rel="stylesheet" type="text/css" href="static/style/clases.css?n=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<script type=" text/javascript" src="static/js/javascriptIndex.js"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-3261656417999696",
			enable_page_level_ads: true
		});
	</script>
	<title>Clases/Origenes - TFTESP</title>
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
				<a class="navbarlink" href="campeones">CAMPEONES</a>
				<a class="navbarlink" href="objetos">OBJETOS</a>
				<a class="navbarlink" style="color:#c9aa71!important" href="clases">CLASES Y ORIGENES</a>
				<a class="navbarlink" href="composiciones">COMPOSICIONES</a>
				<a class="navbarlink" href="constructor">CONSTRUCTOR DE EQUIPO</a>
				<a class="navbarlink" href="tabladelideres">RANKING</a>
			</div>

			<a href="https://tftesp.com/noticia.php?s=notas-parche917">
				<div id="rightbar" style="padding-top:21px; font-size:15px;"><u>Parche: 9.17</u></div>
			</a>
		</div>
		<div id="menuClases">
			<?php
				$con = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
				$con->set_charset('UTF8');
				$resultado = $con->query('select * from clases');
				if($resultado == FALSE){
				  $con->close();
				  die();
				}
				while ($clase = mysqli_fetch_assoc($resultado)) {
					echo "<div class='container'>
									  <div class='titleClase'>
										  <div class='leftTitle'>
											  <div class='imgTitleCont'>
												  <img src='static/clases/" . $clase['id'] . ".png'>
											  </div>
											  <div class='colorCentro'>
												  <h2>".$clase['nombre']."</h2>
											  </div>
										  </div>
										  <div class='rightTitle'>";
					$resultado2 = $con->query('select campeones.id, campeones.precio, campeones.nombre from clases inner join campeones_clases on clases.id = campeones_clases.id_clase inner join campeones on campeones_clases.id_campeon = campeones.id where clases.id = ' . $clase['id']);
					while ($campeon = $resultado2->fetch_assoc()) {
					  switch ($campeon['precio']) {
						case 1:
						  $color = 'gris';
						  break;
						case 2:
						  $color = 'verde';
						  break;
						case 3:
						  $color = 'azul';
						  break;
						case 4:
						  $color = 'morado';
						  break;
						case 5:
						  $color = 'dorado';
						  break;
						default:
						  $color = 'lol';
						  break;
					  }
					  echo '<img src="static/campeones/'.$campeon['id'].'.png" class="'.$color.'">';
					}
					  echo '</div>
							  </div>
						<div class="descClase">';
					$resultado3 = $con->query('select * from clases inner join bufos on clases.id = bufos.id_clase where clases.id = '.$clase['id']);
					echo '<div class="topDesc"><div class="colorMargin"><div>';
					while ($bufo = $resultado3->fetch_assoc()) {
					  echo '<div class="numero">' . $bufo['num_campeones'] .'</div>';
					}
					echo '</div><div>';
					$resultado4 = $con->query('select * from clases inner join bufos on clases.id = bufos.id_clase where clases.id = '.$clase['id']);
					while ($bufo = $resultado4->fetch_assoc()) {
					  echo '<div style="margin-top:5px">' . $bufo['descripcion'] .'.</div>';
					}
					echo '</div></div></div>';
					if(is_null($clase['descripcion'])){
					  echo '<div class="botDesc"><div class="marginAuto"><div class="colorDesc"></div></div></div>';
					} else {
					  echo '<div class="botDesc"><div class="marginAuto"><div class="colorDesc">'.$clase['descripcion'].'.</div></div></div>';
					}
					echo '</div></div>';
				}
			  ?>
		</div>
		<!-- horizontal -->
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle" style="display:block; text-align:center; margin-bottom: 20px;"
			data-ad-client="ca-pub-3261656417999696" data-ad-slot="3656292990" data-ad-format="auto"
			data-full-width-responsive="true"></ins>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<div id="footer">
			<div style="width: 33%; margin-top:30px;">
				<div style="width: 415px; margin-top:10px; margin-left:10px; text-align:center;"><img
						src="static/originales/logoblanco.png" style="width:35%" /></div>
				<p align="bottom" style="margin-left: 120px; ">© 2019 www.tftesp.com</p>
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