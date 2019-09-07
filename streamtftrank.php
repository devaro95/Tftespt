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
	<title>Stream TFT Rank - TFTESP</title>
	<link rel="shortcut icon" href="static/originales/logoblanco.png" />

	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>
	<meta http-equiv='pragma' content='no-cache'>

	<meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@tftesp">
    <meta name="twitter:creator" content="@tftesp">
    <meta name="twitter:title" content= "STREAM TFT RANK">
    <meta name="twitter:description"
        content="<?php print $fila['descMeta']?>">
    <meta name="twitter:image:src" content="https://tftesp.com/static/originales/streamtftrank.png">


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
		<!-- horizontal -->
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle" style="display:block; text-align:center; margin-bottom: 20px;"
			data-ad-client="ca-pub-3261656417999696" data-ad-slot="3656292990" data-ad-format="auto"
			data-full-width-responsive="true"></ins>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<div id="menu">

            <div style="width:80%; height:1000px; border: solid; background: white; margin:auto; text-align: center; margin-top:50px; margin-bottom:50px;">
			<img src="static/originales/streamtftrank.png" 
									style="width: 70%; border: solid #c9aa71;">
            <div id="titulo">
				<h1>STREAM TFT RANK</h1>
			</div>
			<img style="width:600px;margin-bottom:20px;"src="static/originales/bannernoticia.png"/>

                <p style="width:70%; margin:auto;"> Bienvenidos a la herramienta para streamers de TFTesp, introduce tu nombre en el próximo formulario y te daremos un enlace, con este enlace en el obs deberás darle a añadir navegador y copiarlo, te mostrará tu elo actual en pantalla y se actualiza cada 3 min.</p>

                <div style="width:50%; margin: auto;">
                <form action="streamtftrank.php" method="post" class="example">
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
                <?php
                if(isset($_POST['nombre']) && $_POST['nombre'] != null){
                    $nombre = str_replace(" ","_",$_POST['nombre']);
                ?>
                <div style="width:80%; margin: auto; border: solid; background:	rgb(232,232,232);">
                    https://tftesp.com/15489.php?s=<?php echo $nombre?>&so=<?php echo $_POST['server'];?>
                </div>
                <p style="width:70%; margin:auto;">Copia este enlace y añadelo a tu OBS.</p>
                <?php
					$conn = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
						$sql = "INSERT INTO streamtftrank (Nombre) VALUES ( '" . $_POST['nombre'] . "')";
						mysqli_query($conn, $sql);
					$conn->close();
					
                    include 'riotapi.php';
                    
                    $controlador = new RiotAPI();
                    $datosClasificatorias = $controlador->obtenerUsuario($_POST['server'],$_POST['nombre']);
                    $datos = RiotAPI::obtenerInfoRankeds($_POST['server'], $datosClasificatorias['id']);
                    if($datos != null){
						
                ?>
                
                
                <div style="width:650px; margin: auto; text-align: left;">
                    <div style="width:200px; float: left;">
                        <img style="width:200px;" src="static/base-icons/<?php echo strtolower($datos['tier']);  ?>.png" />
                    </div>
                    <div style="width:420px; float: left; color: black;   font-family: 'Anton', sans-serif;">
                        <div style="height:40px; width:100%; padding-left:13px; margin-top:32px; font-size:40px; <?php if($datos['tier'] == 'PLATINUM'){
								echo 'color:#33cccc';		
						}else if($datos['tier'] == 'GOLD'){
						   echo 'color:#cccc00';
						}else if($datos['tier'] == 'IRON'){
						   echo 'color:#CBCDCD';
						}else if($datos['tier'] == 'BRONZE'){
						   echo 'color:#B08D57';
						}else if($datos['tier'] == 'SILVER'){
						   echo 'color:#808080';
						}else if($datos['tier'] == 'DIAMOND'){
						   echo 'color:rgb(57,48,111)';
						}else if($datos['tier'] == 'MASTER'){
						   echo 'color:#990099';
						}else if($datos['tier'] == 'GRANDMASTER'){
						   echo 'color:#990033';
						}else if($datos['tier'] == 'CHALLENGER'){
						   echo 'color:#cc9900';
						}
									?>">
							<b><?php echo $datos['tier'] . " " . $datos['rank']?></b>
                        </div>
                        <div style="height:50px; width:100%; margin-top:10px; padding-left:13px; font-size:35px; color: black;">
                            <b><?php echo $datos['summonerName'] ?> <?php echo $datos['leaguePoints'] . " LP" ?></b>
                        </div>
                        <div style="height:50px; width:100%; padding-left:13px; font-size:27px; ">
                             <b><span style="color: green;"><?php echo $datos['wins'] . " W" ?></span> <span style="color: red;"><?php echo $datos['losses'] . " L"?></span></b>
                        </div>
						<div style="height:50px; width:100%; padding-left:13px; font-size:21px; ">
                           <b> © 2019 www.tftesp.com</b>
                        </div>
                    </div>
                </div>

                <?php
                    }else{
?>

    <div style="width:60%; height:30px; border: 2px solid red; background-color: rgb(255,0,0,0.10); margin: auto; ">
			<span style="margin-left:5px;"><b>Ha ocurrido un error en la busqueda de este usuario</b></span>
		</div>

<?php
                    }
                }
                ?>

            
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