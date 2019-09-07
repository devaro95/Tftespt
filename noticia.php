<html lang="es">

<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" href="static/originales/icono.ico" />
	<meta name="description" content="¡Aquí encontrarás toda la información que necesitas sobre Teamfight Tactics!" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="static/style/style.css?n=1">
	<link rel="stylesheet" type="text/css" href="static/style/noticia.css?n=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<script type=" text/javascript" src="static/js/javascriptIndex.js"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-3261656417999696",
			enable_page_level_ads: true
		});
	</script>
	<title>Noticias - TFTESP</title>
	<link rel="shortcut icon" href="static/originales/logoblanco.png" />

	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>
	<meta http-equiv='pragma' content='no-cache'>
	<?php 
        $con = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
        mysqli_set_charset($con,'UTF8');
        $consulta = $con->query('select tipo,titular,descMeta,foto from noticias where slug = "'.$_REQUEST['s'].'"');
        $fila = $consulta->fetch_assoc();
    ?>
	<meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@tftesp">
    <meta name="twitter:creator" content="@tftesp">
    <meta name="twitter:title" content= "<?php print "[" . $fila['tipo']. "]" . $fila['titular'];?>">
    <meta name="twitter:description"
        content="<?php print $fila['descMeta']?>">
    <meta name="twitter:image:src" content="<?php print "https://tftesp.com/fotos_head/" . $fila['foto'];?>">

	<?php
	if(isset($_REQUEST['s'])){
		$con = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
		mysqli_set_charset($con,'UTF8');
		$consulta = 'select * from noticias where slug = "'.$_REQUEST['s'].'"';
		$resultado = $con->query($consulta);
		$datos = $resultado->fetch_assoc();
		if($datos == NULL){
			$con->close();
			die();
		}
	} else {
		die();
	}
?>
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
				<a class="navbarlink" href="clases">CLASES Y ORIGENES</a>
				<a class="navbarlink" href="composiciones">COMPOSICIONES</a>
				<a class="navbarlink" href="constructor">CONSTRUCTOR DE EQUIPO</a>
				<a class="navbarlink" href="tabladelideres">RANKING</a>
			</div>

			<a href="https://tftesp.com/noticia.php?s=notas-parche917">
				<div id="rightbar" style="padding-top:21px; font-size:15px;"><u>Parche: 9.17</u></div>
			</a>
		</div>
		<div
			style="height: 400px;width: 65%; min-width:1240px; margin:auto; background-size:cover;margin-bottom: 20px;background:url(fotos_noticias/<?php print ($datos['foto']); ?>); background-size:cover;">
		</div>
		<div id="menuNot">
			<div style="margin-bottom:15px; text-align:center;">
				<iframe
					src="https://rcm-eu.amazon-adsystem.com/e/cm?o=30&p=48&l=ez&f=ifr&linkID=4c930a2768f499783233ca22a1283264&t=tftesp-21&tracking_id=tftesp-21"
					width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;"
					frameborder="0"></iframe>
			</div>
			<div style="display: flex;">
				<div id="leftColNot">
					<div
						style="background-image: url('static/originales/fondonoticia.png'); background-position:center;">
						<div style="width: 100%;text-align: center">

							<div id="tituloNoticia">
								<?php 
										echo "<h2 style='color: #c9aa71'>[" . strtoupper($datos['tipo']) . "]</h2>";
										print ('<h1 style="color:black">"' . $datos['titular'] . '"</h1>'); 
										echo "<font style='color: #c9aa71'>Por <b>" . $datos['escritor'] ."</b>, " . $datos['fecha'] ."</font>";
										?>
							</div>
							<img style="width:600px;margin-bottom:20px;" src="static/originales/bannernoticia.png" />
							<?php $arr = explode(PHP_EOL,$datos['noticia']);
									echo 
									"
									<div class='descripcionNoticia'>";
									$noticia = str_replace("[b]", "<b>", $datos['noticia']);
									$noticia = str_replace("[/b]", "</b>", $noticia);
									$noticia = str_replace("[u]", "<u>", $noticia);
									$noticia = str_replace("[/u]", "</u>", $noticia);
									$noticia = str_replace("[i]", "<i>", $noticia);
									$noticia = str_replace("[/i]", "</i>", $noticia);
									
									$noticia = str_replace("[img][center]", "[center][img]", $noticia);
									$noticia = str_replace("[/center][/img]", "[/img][/center]", $noticia);
									$noticia = str_replace("[img][left]", "[left][img]", $noticia);
									$noticia = str_replace("[/left][/img]", "[/img][/left]", $noticia);
									$noticia = str_replace("[img][right]", "[right][img]", $noticia);
									$noticia = str_replace("[/right][/img]", "[/img][/right]", $noticia);

									$noticia = str_replace("[left]", "<div style='text-align:left'>", $noticia);
									$noticia = str_replace("[/left]", "</div>", $noticia);
									$noticia = str_replace("[right]", "<div style='text-align:right'>", $noticia);
									$noticia = str_replace("[/right]", "</div>", $noticia);
									$noticia = str_replace("[center]", "<div style='text-align:center'>", $noticia);
									$noticia = str_replace("[/center]", "</div>", $noticia);
									
									$noticia = str_replace("[link]", "<a src='", $noticia);
									$noticia = str_replace("[/link]", "'></a>", $noticia);
					
									
									$noticia = str_replace("[img]", "<img style='max-width:100%;'src='", $noticia);
									$noticia = str_replace("[/img]", "'/>", $noticia);
									


									$noticia = str_replace("[title]", "<div class='titularNoticias'>
									", $noticia);
									$noticia = str_replace("[/title]", "</div>", $noticia);
									print(nl2br($noticia) . "</div>");
									?>
						</div>
					</div>
				</div>
				<div id="rightCol">
					<div id="lastNov">
						<div class="title" style="text-align: center">
							<span class="nametitle">ÚLTIMAS NOTICIAS</span>
						</div>
						<div class="tierlist">
							<?php
									$con = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
									mysqli_set_charset($con,'UTF8');
									$resultado = $con->query('select slug, tipo, titular from noticias order by fecha desc limit 10');
									while($fila = $resultado->fetch_assoc()){
										echo '<div class="noticia"><a class="linknoticia" href="noticia.php?s='.$fila['slug'].'"><b><span style="color: #c9aa71">['.$fila['tipo'].']</span></b> '.$fila['titular'].'</a></div>';
									}
									$con->close();
								?>
						</div>
						<div style="width:100%; text-align:center; margin-top:40px;">

							<img src="static/originales/lolesp.png">

						</div>
						<div class="title" style="text-align: center; margin-top:20px;">
							<span class="nametitle">TWITTER</span>
						</div>
						<div style="border: 0.5px solid grey; background-color: white;">
							<a class="twitter-timeline" data-lang="es" data-chrome=" transparent noscrollbar"
								data-width="350" data-height="520" data-dnt="true" data-link-color="#FAB81E"
								href="https://twitter.com/TFT_Esp?ref_src=twsrc%5Etfw">Tweets by TFT_Esp</a>
							<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
				</div>
			</div>
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