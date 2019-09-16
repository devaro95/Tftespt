<html lang="es">

<head>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" href="static/originales/icono.ico" />
	<meta name="description" content="¡Aquí encontrarás toda la información que necesitas sobre Teamfight Tactics!" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="static/style/style.css?n=1">
	<link rel="stylesheet" type="text/css" href="static/style/campeones.css?n=1">
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
	<meta name="twitter:image:src" content="https://tftesp.com/fotos_head/bienvenidos.png">

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
					<font style="color:black; ">TEAMFIGHT TACTICS</font> EN ESPAÑOL
				</b>
			</div>
		</div>
		<div id="navbar">
			<div id="midbar">
				<a class="navbarlink" style="color:black!important;" href="index">INICIO</a>
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
		</div><?php
        if(isset($_REQUEST['campeon'])){
                    $con = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
                    mysqli_set_charset($con,'UTF8');
                    $consulta = 'select * from campeones where nombre = "'.$_REQUEST['campeon'].'"';
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
		<div
			style="border:solid; min-width: 1150px; width: 60%; height: 600px;margin:auto;margin-top: 3%;color: black; background-color: white; margin-bottom:100px;">
			<div
				style="border-bottom:solid;height: 110px;margin:auto; padding-top:20px;display: flex;align-items:center; justify-content: center; background-color: rgb(18,18,18); color:white;">
				<div>
					<?php
                print
                "<img src='static/campeones/". $datos['id']. ".png' style='width:75px;' alt=". $datos['nombre'] ." />"
                ?>
				</div>
				<div style="font-size:70px; margin-left:15px">
					<?php
                    print $datos['nombre'];
                    $resultado2 = $con->query('select * from campeones_clases where id_campeon ='. $datos['id']);
								while($fila2 = $resultado2->fetch_assoc()){
									$resultado3 = $con->query('select * from clases where id ='. $fila2['id_clase']);
									$fila3 = $resultado3->fetch_assoc();
									echo '<img src="static/clases/'.$fila2['id_clase'].'.png" class="oriclasicon" style="margin-left: 5px; width:38px;" title="'.$fila3['nombre'].'" />';
								}
                ?>
				</div>
			</div>

			<?php
            print
            "<div style='float: left; background: url(static/campeonesrender/". $datos['id']. ".png) no-repeat center center;
                 width:40%; height: 460px; background-size: contain;   overflow-y: hidden ! important;
                 overflow-x: hidden ! important;'>
            </div>";
        ?>
			<div style="width:58%; float: left; height:30px;"></div>
			<div style="width:58%; float: left; font-size: 20px; margin-left:10px;margin-top:10px;">
				<u>
					<?php
                    print $datos['nombrehabilidad'];
                    ?>
				</u>
			</div>
			<div style="width:59%; height:100px; float: left;">
				<div style="width:15%; float: left;">
					<?php
                    print
                    "<img src='static/habilidades/". $datos['id']. ".png' style='width:75px; margin-left:10px;margin-top:10px;' alt=". $datos['nombrehabilidad'] ." />"
                    ?>
				</div>
				<div style="width:78%; float: left; margin-left:10px;margin-top:10px; font-size: 15px;">
					<?php
                    print $datos['descripcionhabilidad'];

                    ?>
				</div>
				<div style="width: 670px; float:left; overflow-x: hidden ! important;">
					<table id="campeones2">
						<thead>
							<tr>
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
							<tr>
								<td><img src="static/originales/oro.png"
										class="oroicon"><?php echo $datos['precio']?></img></td>
								<td><?php echo $datos['vida']?></td>
								<td><?php echo $datos['armadura']?></td>
								<td><?php echo $datos['rm']?></td>
								<td><?php echo $datos['dps']?></td>
								<td><?php echo $datos['dano']?></td>
								<td><?php echo $datos['vda']?></td>
								<?php
							if($datos['rango'] == 1){
								echo '<td style="font-size: 25px"><b style="color:#c9aa71">|</b>||||<span class="hidetext">'. $datos['rango'] .'</span></td>';
							}elseif($datos['rango'] == 2){
								echo '<td style="font-size: 25px"><b style="color:#c9aa71">||</b>|||<span class="hidetext">'. $datos['rango'] .'</span></td>';
							}elseif($datos['rango'] == 3){
								echo '<td style="font-size: 25px"><b style="color:#c9aa71">|||</b>||<span class="hidetext">'. $datos['rango'] .'</span></td>';
							}elseif($datos['rango'] == 4){
								echo '<td style="font-size: 25px"><b style="color:#c9aa71">||||</b>|<span class="hidetext">'. $datos['rango'] .'</span></td>';
							}elseif($datos['rango'] == 5){
								echo '<td style="font-size: 25px"><b style="color:#c9aa71">|||||</b><span class="hidetext">'. $datos['rango'] .'</span></td>';
							}

							?>
							</tr>

						</tbody>
					</table>
				</div>
				<div style="width:58%; float: left; font-size: 20px; margin-left:10px;margin-top:10px;">
					<u>
						SINERGIAS
					</u>
				</div>
				<div style="width:670px; height:250px; float: left; margin-top: 10px;">
					<?php
                    $resultado2 = $con->query('select * from campeones_clases where id_campeon ='. $datos['id']);
								while($fila2 = $resultado2->fetch_assoc()){
									$resultado3 = $con->query('select * from campeones_clases where id_clase ='. $fila2['id_clase'] .' and id_campeon <> ' . $datos['id'] . ' LIMIT 3 ');
									while($fila3 = $resultado3->fetch_assoc()){
                                        echo '<img src="static/campeones/'.$fila3['id_campeon'].'.png" class="oriclasicon" style="margin-left: 5px; width:56px;" />';
                                    }
								}
                ?>
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
						<u><a href="contactar.html" style="color:white!important;">Contacto</a></u> /
						<u><a href="politica-de-privacidad.html" style="color:white!important;">Politica de
								privacidad</a></u> /
						<u><a href="terminos-y-condiciones.html" style="color:white!important;">Terminos y
								condiciones</a></u>
					</div>
				</div>
			</div>
		</div>
</body>

</html>