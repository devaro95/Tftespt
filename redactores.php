<html lang="es">

<head>

	<meta charset="UTF-8" />
	<link rel="shortcut icon" href="static/originales/icono.ico" />
	<meta name="description" content="¡Aquí encontrarás toda la información que necesitas sobre Teamfight Tactics!" />
	<script src="https://kit.fontawesome.com/34bc377d44.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="static/style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<script type=" text/javascript" src="static/js/redactar.js"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-3261656417999696",
			enable_page_level_ads: true
		});
	</script>
	<title>Redactores - TFTESP</title>
	<link rel="shortcut icon" href="static/originales/logoblanco.png" />
	<link rel="stylesheet" type="text/css" href="static/style/noticia.css">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@tftesp">
	<meta name="twitter:creator" content="@tftesp">
	<meta name="twitter:title" content="TftEsp.com">
	<meta name="twitter:description"
		content="Conoce la mejor guía de TFT en español y ponte al tanto de las actualizaciones más recientes.">
	<meta name="twitter:image:src" content="https://tftesp.com/fotos_head/banner-twitter.jpg">

	<style type="text/css">
		#menuNoticias {
			font-size: 23px;
			margin-bottom: 15px;
		}

		#texto {
			border: solid 1px black;
			color: black;
			height: 30px;
			font-size: 20px;
		}

		#titular {
			border: solid 1px black;
			color: black;
			height: 30px;
			font-size: 20px;
		}

		button {
			background: black;
			border: solid 1px black;
			color: white;
			height: 30px;
			font-size: 20px;
		}

		span {
			margin: 5px 3px;
		}
	</style>
	<?php
		if(isset($_POST['submit'])){
			$titular = $_POST['titular'];
			$noticia = $_POST['noticia'];
			$tipo = $_POST['tipo'];
			$slug = str_replace(" ", "-", $titular);
			$foto = basename( $_FILES['uploadedfile']['name']);
			$descMeta = substr ($noticia , 0 , 145);
			$con = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
						mysqli_set_charset($con,'UTF8');
			$consulta = 'INSERT into prueba(slug,tipo,titular,noticia,foto,descMeta,escritor) values ("'. $slug. '","' . $tipo . '","' . $titular . '","' . $noticia . '","'. $foto . '","'. $descMeta . '", "alvaro" )';
			$resultado = mysqli_query($con, $consulta);
			$target_path = "fotos_noticias/";
			$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
			move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
			copy("fotos_noticias/" . $foto, "fotos_head/" .$foto);
		}
?>


</head>

<body id="inicio">
	<div style="display: block;">
		<div style="margin:auto; width:65%">
			<div style="display:flex; margin-bot:-50px;">
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
				<a class="navbarlink" style="color:#c9aa71!important" href="index">INICIO</a>
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
		
		<div id="menu" style="margin-top:20px;">
			<div id="menuNoticias">
				<div style="background-image: url('static/originales/fondonoticia.png'); border: 2px solid black;color: black;font-weight:bold">
					<div style="width: 95%;margin:auto; text-align:center">
						<form enctype="multipart/form-data" action="redactores.php" method="POST">
							<br>
							Titular <p><input id="titular" type="text" name="titular" maxlength="38" required></p>
							Noticia<p>
								<div>
									<span onclick='anadir(0)' class="fas fa-heading" title="Titulo">
									</span>
									<span onclick='anadir(1)' class="fas fa-bold" title="Negrita">
									</span>
									<span onclick='anadir(2)' class="fas fa-italic" title="Cursiva">
									</span>
									<span onclick='anadir(3)' class="fas fa-underline" title="Subrayado">
									</span>
									<span onclick='anadir(4)' class="fas fa-align-left" title="Alinear izquierda">
									</span>
									<span onclick='anadir(5)' class="fas fa-align-center" title="Alinear centro">
									</span>
									<span onclick='anadir(6)' class="fas fa-align-right" title="Alinear derecha"></span>
									<span onclick='anadir(7)' class="fas fa-link" title="Enlace"></span>
									<span onclick='anadir(8)' class="far fa-image" title="Añadir imagen"></span>
								</div>
								<textarea id="texto" type="text" name="noticia"
									style="resize:none;height:400px;font-size:18px;" cols="70" required></textarea>
							</p>
							Tipo Noticia [ ] <p><input id="texto" type="text" name="tipo" maxlength="28" required></p>
							Foto encabezado<br><br>
							<input name="uploadedfile" type="file" required /><br><br>
							<button type="submit" value="Subir archivo" name="submit">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>

</html>
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
</body>

</html>