<html>
	<head>
        <meta http-equiv="refresh" content="180">
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	</head>
	<body>

<?php /*if(isset($_POST['nombre']) && $_POST['nombre'] != null){ */
	include 'riotapi.php';
	$controlador = new RiotAPI();
	$datosClasificatorias = $controlador->obtenerUsuario("euw","Blacklink3r");
	$datos = RiotAPI::obtenerInfoRankeds("euw", $datosClasificatorias['id']);	
?>


<div style="width:530px; position: absolute;">
    <div style="width:200px; float: left;">
        <img style="width:200px;" src="static/base-icons/<?php echo strtolower($datos['tier']);  ?>.png" />
    </div>
    <div style="width:330px; float: left; color: white; -webkit-text-fill-color: white;
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 2.50px;   font-family: 'Anton', sans-serif;">
        <div style="height:40px; width:100%; padding-left:13px; margin-top:32px; font-size:40px; ">
            <?php echo $datos['tier'] . " " . $datos['rank']?>
        </div>
        <div style="height:50px; width:100%; margin-top:10px; padding-left:13px; font-size:35px; -webkit-text-fill-color: white;
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 2.00px;">
            <?php echo $datos['summonerName'] ?> <?php echo $datos['leaguePoints'] . " LP" ?>
        </div>
        <div style="height:50px; width:100%; padding-left:13px; font-size:27px; ">
             <span style="-webkit-text-fill-color: green;
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 1.70px;"><?php echo $datos['wins'] . " W" ?></span> <span style="-webkit-text-fill-color: red;
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 1.70px;"><?php echo $datos['losses'] . " L"?></span>
        </div>
    </div>
</div>

	</body>
</html>
