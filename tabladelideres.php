<html lang="es">

<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" href="static/originales/icono.ico" />
	<meta name="description" content="¡Aquí encontrarás toda la información que necesitas sobre Teamfight Tactics!" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="static/style/style.css?n=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<script type=" text/javascript" src="static/js/javascriptIndex.js"></script>
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
	<meta name="twitter:image:src" content="https://tftesp.com/fotos_head/banner-twitter.jpg">
	<?php
	include 'riotapi.php';
	error_reporting(0); 
	$controlador = new RiotAPI();
	if(isset($_POST['server']) && $_POST['server'] != null){
		 $servidor = $_POST['server'];
	}else{
		$servidor = 'euw';
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
				<a class="navbarlink" href="index">INICIO</a>
				<a class="navbarlink" href="campeones">CAMPEONES</a>
				<a class="navbarlink" href="objetos">OBJETOS</a>
				<a class="navbarlink" href="clases">CLASES Y ORIGENES</a>
				<a class="navbarlink" href="composiciones">COMPOSICIONES</a>
				<a class="navbarlink" href="constructor">CONSTRUCTOR DE EQUIPO</a>
				<a class="navbarlink" style="color:#c9aa71!important;" href="tabladelideres">RANKING</a>
			</div>

			<a href="https://tftesp.com/noticia.php?s=notas-parche917">
				<div id="rightbar" style="padding-top:21px; font-size:15px;"><u>Parche: 9.17</u></div>
			</a>
		</div>

		<div style="height:40px;"></div>

		<div id="menu" style="width: 1240px;">
			<?php  if(isset($_POST['nombre']) && $_POST['nombre'] != null){ 
				$datosClasificatorias = $controlador->obtenerUsuario($servidor,$_POST['nombre']);
				$datos = RiotAPI::obtenerInfoRankeds($_POST['server'], $datosClasificatorias['id']);
				if($datos != NULL){
			?>
			<div style="float:left;">
				<div style="margin: auto; width:100%; height:50px;">
					<form action="tabladelideres.php" method="post" class="example">
						<input type="text" required placeholder="Nombre.."
							style="border: 2px solid black; background-color: white; height:41px; width:70%; color:black;"
							name="nombre" />
						<button
							style="border: 2px solid black; width:10%; background-color: rgb(18,18,18); color:white;"
							type="submit"> <i class="fa fa-search"></i> </button>
						<select
							style="border: 2px solid black; background-color: white; height:41px; color:black; width:20%;"
							name="server">
							<option value="euw">EUW
							<option value="eune">EUNE
							<option value="br">BR
							<option value="na">NA
						</select>
					</form>
				</div>
				<div
					style="min-width: 340px; max-width: 340px; border: 1px solid black; margin: auto; background: white; text-align: center;  height: 330px; margin-top: 2px;">
					<div
						style="width:100%; height:60px; background: rgb(18,18,18); color:white; font-size: 25px; line-height: 60px;">
						<img style="border-radius: 50%; width:50px; border: solid #c9aa71; margin-left:27px; margin-top: 4px;"
							align="left"
							src=<?php echo '"//ddragon.leagueoflegends.com/cdn/9.17.1/img/profileicon/'. $datosClasificatorias['profileIconId'] . '.png"' ?>>
						<?php echo $datos['summonerName'] ?>
					</div>
					<div style="width:90%; height: 150px; border-bottom: 1px solid grey; margin:auto;">
						<div style="width:120px; float:left;">
							<img src="static/base-icons/<?php echo strtolower($datos['tier']);  ?>.png"
								style="width: 120px;" />
						</div>
						<div style="width:184px; float: right; text-align: left;">
							<div style="width:90%; height:55px; font-size:25px; margin-top:25px; ">
								<b><?php echo $datos['tier'] . " " . $datos['rank']?></b></div>


							<div style="width:90%; height:30px;"><?php echo $datos['leaguePoints'] ?> LPs </div>
						</div>
					</div>
					<div
						style="width:90%; height: 30px; border-bottom: 1px solid grey; margin:auto; font-size:18px;text-align:left;">
						<b>PARTIDAS JUGADAS </b><span
							style="float:right;"><?php echo $datos['wins']+$datos['losses'] ?></span>
					</div>
					<div
						style="width:90%; height: 30px; border-bottom: 1px solid grey; margin:auto; font-size:18px;text-align:left;">
						<b>VICTORIAS </b><span style="float:right;"><?php echo $datos['wins'] ?></span>
					</div>
					<div
						style="width:90%; height: 30px; border-bottom: 1px solid grey; margin:auto; font-size:18px;text-align:left;">
						<b>DERROTAS </b><span style="float:right;"><?php echo $datos['losses'] ?></span>
					</div>
					<div style="width:90%; height: 30px;  margin:auto; font-size:18px;text-align:left;">
						<b>WIN RATE </b><span
							style="float:right;"><?php echo number_format($datos['wins']/ ($datos['wins']+$datos['losses'])*100, 2) . "%"?></span>
					</div>
				</div>
			</div>

			<?php }else{ ?>
			<div style="width:40%; height:30px; border: 2px solid red; background-color: rgb(255,0,0,0.10); ">
				<span style="margin-left:5px;"><b>Ha ocurrido un error en la busqueda de este usuario</b></span>
			</div>
			<div style="float:left; margin-top:10px;">
				<div style="margin: auto; width:100%; height:50px;">
					<form action="tabladelideres.php" method="post" class="example">
						<input type="text" required placeholder="Nombre.."
							style="border: 2px solid black; background-color: white; height:41px; width:70%; color:black;"
							name="nombre" />
						<button
							style="border: 2px solid black; width:10%; background-color: rgb(18,18,18); color:white;"
							type="submit"> <i class="fa fa-search"></i> </button>
						<select
							style="border: 2px solid black; background-color: white; height:41px; color:black; width:20%;"
							name="server">
							<option value="euw">EUW
							<option value="eune">EUNE
							<option value="br">BR
							<option value="na">NA
							<option value="la1">LAN
							<option value="la2">LAS
						</select>
					</form>
				</div>

				<div
					style="min-width: 340px; max-width: 340px; border: 1px solid black; margin: auto; background: white; text-align: center; height: 380px; margin-top: 2px;">
					<div
						style="width:100%; height:60px; background: rgb(18,18,18); color:white; font-size: 25px; line-height: 60px; ">
						<img style="border-radius: 50%; width:50px; border: solid #c9aa71; margin-left:27px; margin-top: 4px;"
							align="left" src="//ddragon.leagueoflegends.com/cdn/9.17.1/img/profileicon/29.png"> ERROR
					</div>
					<div style="width:90%; height: 150px; border-bottom: 1px solid grey; margin:auto;">
						<div style="width:120px; float:left;">
							<img src="static/base-icons/provisional.png" style="width: 120px;" />
						</div>
						<div style="width:184px; float: right; text-align: left;">
							<div style="width:90%; height:55px; font-size:25px; margin-top:25px; "><b>???</b></div>


							<div style="width:90%; height:30px;">??? LPs </div>
						</div>
					</div>
					<div
						style="width:90%; height: 30px; border-bottom: 1px solid grey; margin:auto; font-size:18px;text-align:left;">
						<b>PARTIDAS JUGADAS </b><span style="float:right;">???</span>
					</div>
					<div
						style="width:90%; height: 30px; border-bottom: 1px solid grey; margin:auto; font-size:18px;text-align:left;">
						<b>VICTORIAS </b><span style="float:right;">???</span>
					</div>
					<div
						style="width:90%; height: 30px; border-bottom: 1px solid grey; margin:auto; font-size:18px;text-align:left;">
						<b>DERROTAS </b><span style="float:right;">???</span>
					</div>
					<div style="width:90%; height: 30px;  margin:auto; font-size:18px;text-align:left;">
						<b>WIN RATE </b><span style="float:right;">???</span>
					</div>
				</div>
			</div>






			<?php }}else{?>

			<div style="float:left;">
				<div style="margin: auto; width:100%; height:50px;">
					<form action="tabladelideres.php" method="post" class="example">
						<input type="text" required placeholder="Nombre.."
							style="border: 2px solid black; background-color: white; height:41px; width:70%; color:black;"
							name="nombre" />
						<button
							style="border: 2px solid black; width:10%; background-color: rgb(18,18,18); color:white;"
							type="submit"> <i class="fa fa-search"></i> </button>
						<select
							style="border: 2px solid black; background-color: white; height:41px; color:black; width:20%;"
							name="server">
							<option value="euw">EUW
							<option value="eune">EUNE
							<option value="br">BR
							<option value="na">NA
							<option value="la1">LAN
							<option value="la2">LAS
						</select>
					</form>
				</div>

				<div
					style="min-width: 340px; max-width: 340px; border: 1px solid black; margin: auto; background: white; text-align: center; height: 380px; margin-top: 2px;">
					<div
						style="width:100%; height:60px; background: rgb(18,18,18); color:white; font-size: 25px; line-height: 60px; ">
						<img style="border-radius: 50%; width:50px; border: solid #c9aa71; margin-left:27px; margin-top: 4px;"
							align="left" src="//ddragon.leagueoflegends.com/cdn/9.17.1/img/profileicon/29.png"> ???
					</div>
					<div style="width:90%; height: 150px; border-bottom: 1px solid grey; margin:auto;">
						<div style="width:120px; float:left;">
							<img src="static/base-icons/provisional.png" style="width: 120px;" />
						</div>
						<div style="width:184px; float: right; text-align: left;">
							<div style="width:90%; height:55px; font-size:25px; margin-top:25px; "><b>???</b></div>


							<div style="width:90%; height:30px;">??? LPs </div>
						</div>
					</div>
					<div
						style="width:90%; height: 30px; border-bottom: 1px solid grey; margin:auto; font-size:18px;text-align:left;">
						<b>PARTIDAS JUGADAS </b><span style="float:right;">???</span>
					</div>
					<div
						style="width:90%; height: 30px; border-bottom: 1px solid grey; margin:auto; font-size:18px;text-align:left;">
						<b>VICTORIAS </b><span style="float:right;">???</span>
					</div>
					<div
						style="width:90%; height: 30px; border-bottom: 1px solid grey; margin:auto; font-size:18px;text-align:left;">
						<b>DERROTAS </b><span style="float:right;">???</span>
					</div>
					<div style="width:90%; height: 30px;  margin:auto; font-size:18px;text-align:left;">
						<b>WIN RATE </b><span style="float:right;">???</span>
					</div>
				</div>
			</div>

			<?php } ?>


			<div style="float:right;">
				<form action="tabladelideres.php" method="post">
					<div style="width:80%; border:solid black; margin: auto;margin-bottom:10px; text-align: center;">
						<div style="width: 100%;color:black;  margin-bot:100px; ">
							<div style="display: flex;margin: auto;">
								<div style="width: 16%;border-right: solid 1px; 
									<?php if ($servidor=="euw"){
									echo "background: rgb(18,18,18);";
									}else{
									echo "background: rgb(18,18,18,0.75);";
									};
									?> ">
									<button name="server" value="euw"
										style="cursor:pointer;width: 100%; background: none; border: 0; line-height: 30px; color:white;"
										type="submit">
										EUW
									</button>
								</div>
								<div style="width: 17%;border-right: solid 1px;
									<?php if ($servidor=="na"){
									echo "background: rgb(18,18,18);";
									}else{
									echo "background: rgb(18,18,18,0.75);";
									};
									?> ">
									<button name="server" value="na"
										style="cursor:pointer;width: 100%; background: none; border: 0; line-height: 30px; color:white;"
										type="submit">
										NA
									</button>
								</div>
								<div style="width: 17%;border-right: solid 1px;
									<?php if ($servidor=="eune"){
									echo "background: rgb(18,18,18);";
									}else{
									echo "background: rgb(18,18,18,0.75);";
									};
									?> ">
									<button name="server" value="eune"
										style="cursor:pointer;width: 100%; background: none; border: 0; line-height: 30px; color:white;"
										type="submit">
										EUNE
									</button>
								</div>
								<div style="width: 17%;border-right: solid 1px;
									<?php if ($servidor=="br"){
									echo "background: rgb(18,18,18);";
									}else{
									echo "background: rgb(18,18,18,0.75);";
									};
									?> ">
									<button name="server" value="br"
										style="cursor:pointer;width: 100%; background: none; border: 0; line-height: 30px; color:white;"
										type="submit">
										BR
									</button>
								</div>
								<div style="width: 17%;border-right: solid 1px;
									<?php if ($servidor=="la1"){
									echo "background: rgb(18,18,18);";
									}else{
									echo "background: rgb(18,18,18,0.75);";
									};
									?> ">
									<button name="server" value="la1"
										style="cursor:pointer;width: 100%; background: none; border: 0; line-height: 30px; color:white;"
										type="submit">
										LAN
									</button>
								</div>
								<div style="width: 17%;border-right: solid 1px;
									<?php if ($servidor=="la2"){
									echo "background: rgb(18,18,18);";
									}else{
									echo "background: rgb(18,18,18,0.75);";
									};
									?> ">
									<button name="server" value="la2"
										style="cursor:pointer;width: 100%; background: none; border: 0; line-height: 30px; color:white;"
										type="submit">
										LAS
									</button>
								</div>
							</div>
						</div>
					</div>
				</form>

				<div
					style="min-width: 880px;width:65%; border: 1px solid black; margin: auto; background: white; text-align: center; color: black; ">
					<div
						style="width: 100%;height: 35px;border-bottom: 1px solid black ;color:#c9aa71;background: rgb(18,18,18); height:60px; line-height: 60px; margin-bot:100px; color: white; ">
						<div style="display: flex;margin: auto;">
							<div style="width: 10%;">
								POSICION
							</div>
							<div style="width: 30%;">
								NOMBRE INVOCADOR
							</div>
							<div style="width: 20%;">
								RANGO
							</div>
							<div style="width: 10%;">
								PUNTOS
							</div>
							<div style="width: 10%;">
								WIN RATE
							</div>
							<div style="width: 10%;">
								VICTORIAS
							</div>
							<div style="width: 10%;">
								DERROTAS
							</div>
							<div style="width: 10%;">
								JUGADO
							</div>
						</div>
					</div>

					<?php 
				$cuenta = 1;
				$dato = $controlador->ranking($servidor,'challenger');
				
				foreach((array) $dato['entries'] as $fila){
					
				?>
					<div
						style="width: 100%;height: 50px; border-bottom: solid black 1px;color:black; line-height: 50px;">
						<div style="display: flex;margin: auto;">
							<div style="width: 10%;">
								<?php echo $cuenta ?>
							</div>
							<div style="width: 30%;">
								<?php echo $fila['summonerName'] ?>
							</div>
							<div style="width: 20%;display: flex;">
								<div style="margin:auto;display: flex;">
									<div>
										<img src="static/base-icons/<?php echo strtolower($dato['tier']);  ?>.png"
											style="width: 40px;margin-top: 5px;" />
									</div>
									<div>
										<?php echo $dato['tier']?>
									</div>
								</div>
							</div>
							<div style="width: 10%;">
								<?php echo $fila['leaguePoints'] ?>
							</div>
							<div style="width: 10%;">
								<?php echo number_format($fila['wins']/ ($fila['wins']+$fila['losses'])*100, 2) . "%"?>
							</div>
							<div style="width: 10%;">
								<?php echo $fila['wins'] ?>
							</div>
							<div style="width: 10%;">
								<?php echo $fila['losses'] ?>
							</div>
							<div style="width: 10%;">
								<?php echo $fila['wins']+$fila['losses'] ?>
							</div>
						</div>
					</div>
					<?php 
						$cuenta = $cuenta + 1;
				}
					
				?>
				</div>
				<div style="height:100px; background:transparent; border: none;"></div>
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
</body>

</html>