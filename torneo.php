<html lang="es">

<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" href="static/originales/icono.ico" />
	<meta name="description" content="¡Aquí encontrarás toda la información que necesitas sobre Teamfight Tactics!" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="static/style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<script type=" text/javascript" src="static/js/javascriptIndex.js"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-3261656417999696",
			enable_page_level_ads: true
		});
	</script>
	<title>Torneo - TFTESP</title>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@tftesp">
<meta name="twitter:creator" content="@tftesp">
<meta name="twitter:title" content="Torneo de inauguración 4fun - TFTEsp.com">
<meta name="twitter:description"
	content="Participa y diviértete en el primer torneo de TFTEsp.com y demuestra que eres el mejor.">
<meta name="twitter:image:src" content="https://tftesp.com/fotos_head/torneo.jpg">
<link rel="stylesheet" type="text/css" href="static/style/noticia.css">
<?php
	$enlace = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
	mysqli_set_charset($enlace, 'UTF8');
	$consulta = mysqli_query($enlace, 'SELECT * FROM torneo');
	$participantes = mysqli_num_rows($consulta);
		if(isset($_POST['submit'])){
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			$invocador = $_POST['invocador'];
			$invocadorOK = false;
			$emailOK = false;
			if($nombre == "" || $email == "" || $invocador == ""){
				echo '<script language="javascript">alert("Debes completar todos los campos.");</script>'; 
			}else{
				if ($resultado = mysqli_query($enlace, 'SELECT * FROM torneo WHERE email ="'. $email .'"')) {
					$row_cnt = mysqli_num_rows($resultado);
					if($row_cnt<=0 ){
						$emailOK = true;
					}else{
						echo '<script language="javascript">alert("Email en uso.");</script>'; 
					}
				}
				if ($resultado = mysqli_query($enlace, 'SELECT * FROM torneo WHERE invocador ="'. $invocador .'"')) {
					$row_cnt = mysqli_num_rows($resultado);
					if($row_cnt<=0 ){
						$invocadorOK = true;
					}else{
						echo '<script language="javascript">alert("Nombre de invocador en uso.");</script>'; 
					}
				}
				if($invocadorOK && $emailOK){
					$insert = 'INSERT INTO torneo (nombre, email, invocador) VALUES ("' . $nombre . '","' . $email . '","' . $invocador . '")';
					if ($enlace->query($insert) === TRUE) {
						echo '<script language="javascript">alert("¡Te Hemos apuntado al torneo! Gracias.");</script>'; 
					}
				}
			}
		}
	?>
<style type="text/css">
	#texto {
		background-color: black;
		border: solid 1px #c9aa71;
		color: #c9aa71;
		height: 30px;
		font-size: 20px;
		position: absolute;
		right: 0;
	}

	button {
		background: black;
		border: solid 1px #c9aa71;
		color: #c9aa71;
		height: 30px;
		font-size: 20px;
	}
</style>

</head>

<body id="inicio">
	<div style="display: block;">
		<div>
			<a href="index.php">
				<div id="leftbar"><img src="static/originales/icono_discord4x-8.png" style="width:110px"></div>
			</a>
		</div>
		<div id="navbar">

			<div id="midbar">
				<a class="navbarlink" href="index.php">INICIO</a>
				<a class="navbarlink" href="campeones.html">CAMPEONES</a>
				<a class="navbarlink" href="objetos.html">OBJETOS</a>
				<a class="navbarlink" href="clases.html">CLASES Y ORIGENES</a>
				<a class="navbarlink" href="composiciones.html">COMPOSICIONES</a>
				<a class="navbarlink" href="constructor.html">CONSTRUCTOR DE EQUIPO</a>
				<a class="navbarlink" href="tabladelideres.php">RANKING</a>
			</div>
			<a href="https://twitter.com/TFT_Esp">
				<div id="rightbar"><img src="static/originales/twitter.png" style="width:18px; padding-top:18px;"></div>
			</a>
			<a href="https://www.instagram.com/tftesp/">
				<div id="rightbar"><img src="static/originales/instagram.png" style="width:34px; padding-top:8px;"></div>
			</a>
			<a href="https://tftesp.com/noticia.php?s=notas-parche917">
				<div id="rightbar" style="padding-top:18px; font-size:15px;"><u>Parche: 9.17</u></div>
			</a>
		</div><!-- horizontal -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle" style="display:block; text-align:center; margin-bottom: 20px;"
	data-ad-client="ca-pub-3261656417999696" data-ad-slot="3656292990" data-ad-format="auto"
	data-full-width-responsive="true"></ins>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div id="menuNoticias">
	<div style="background: rgb(18,18,18, 0.75); border: 2px solid #c9aa71;color: #c9aa71; ">
		<div style="width: 100%;text-align: center">
			<div style="width:100%">
				<img src="fotos_cabecera/torneo.jpg" style="width: 100%;border-bottom: solid #c9aa71;">
			</div>
			<div id="tituloNoticia">
				Preparaos para el primer torneo de TFTEsp.com
			</div>
			<div style="display: flex"> 
				<div style="text-align:left;width:70%;height:98%; margin:-15px auto auto 15px; font-size: 20px;border-right:solid;padding-top:10px;">
					Las reglas son sencillas. Participa, juega y diviértete. <br><br>
					Será un torneo dividido en 2 fases:<br><br>
					- Fase de puntos: los participantes jugarán partidas contra oponentes del torneo aleatorios y
					ganarán
					puntos dependiendo de la posición.<br><br>
					- Fase final: los 8 participantes con más puntos pasarán a la fase final en la que se decidirá
					quiénes
					son los 3 mejores invocadores.<br><br>
					Fecha: 9-11 de agosto del 2019.<br><br>
					Premio: 3 tickets para participar en el próximo torneo con un premio de 2800Rps.<br><br>
					Para participar solo tienes que rellenar los siguientes datos:
					<div style="margin:auto; width: 60%;position: relative;">
						<form method="POST" action="torneo.php">
							<p>Nombre/Alias: <input id="texto" type="text" name="nombre" required></p>
							<p>Nombre de Invocador: <input id="texto" type="text" name="invocador" required></p>
							<div style="text-align:center; color:red; font-size:15px;">
								<?php if(isset($_POST['submit']) && $invocadorOK == false && $invocador != ""){
										echo "Invocador ya registrado o en blanco.";
									}
									?>
							</div>
							<p>E-mail: <input id="texto" type="email" name="email" required></p>
							<div style="text-align:center; color:red; font-size:15px;">
								<?php if(isset($_POST['submit']) && $emailOK == false && $email != ""){
										echo "Email ya registrado o en blanco.";
									}
									?>
							</div>
							<div style="font-size:15px;text-align:center">
								<label><input type="checkbox" name="terminos" value="terminos" required>Acepto los <u><a
											TARGET="_BLANK" href="terminos-y-condiciones.html">Terminos y
											condiciones</a></u> de uso.<br><label>
							</div><br>
							<div style="text-align:center">
								<button type="submit" name="submit" required>PARTICIPAR</button>
							</div>
						</form>
					</div>
				</div>
				<div style="font-size: 30px;height:300px;margin:auto;">
					<div>
						Número de <br>participantes inscritos
					</div>
					<div style="font-size:80px;">
						<?php echo $participantes;?>
					</div>
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
</script><div id="footer">
	<div style="width: 33%;">
		<div style="width: 415px; margin-top:10px; margin-left:10px;"><img src="static/originales/logo.png" style="width:50%"></img></div>
		<p1 align="bottom" style="margin-left: 20px; ">© 2019 www.tftesp.com<p1></p1>
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
			<div style="align-items: center;display: flex;width: 30px;margin: auto;">
				<div>
					<a href="https://twitter.com/TFT_Esp">
						<img src="static/originales/twitter.png" style="width:20px;">
					</a>
				</div>
				<div>
					<a href="https://www.instagram.com/tftesp/">
						<img src="static/originales/instagram.png" style="width:34px;">
					</a>
				</div>
			</div>
			<div style="font-size: 10px;margin-top:10px;">
				<u><a href="contactar.html">Contacto</a></u> /
				<u><a href="politica-de-privacidad.html">Politica de privacidad</a></u> /
				<u><a href="terminos-y-condiciones.html">Terminos y condiciones</a></u>
			</div>
		</div>
	</div>
</div>
</div>
</body>

</html>