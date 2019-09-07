<html>
	<head>
        <meta http-equiv="refresh" content="180">
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	</head>
	<body>

<?php /*if(isset($_POST['nombre']) && $_POST['nombre'] != null){ */
	include 'riotapi.php';
    $controlador = new RiotAPI();
    $nombre = str_replace("_", " ", $_REQUEST['s']);
	$datosClasificatorias = $controlador->obtenerUsuario($_REQUEST['so'],$nombre);
    $datos = RiotAPI::obtenerInfoRankeds($_REQUEST['so'], $datosClasificatorias['id']);	
    if($datos!=null){
?>



<div style="width:650px; margin: auto; text-align: left;">
                    <div style="width:200px; float: left;">
                        <img style="width:200px;" src="static/base-icons/<?php echo strtolower($datos['tier']);  ?>.png" />
                    </div>
                    <div style="width:420px; float: left; color: white;   font-family: 'Anton', sans-serif;">
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
                        <div style="height:50px; width:100%; margin-top:10px; padding-left:13px; font-size:35px; color: white;">
                            <b><?php echo $datos['summonerName'] ?> <?php echo $datos['leaguePoints'] . " LP" ?></b>
                        </div>
                        <div style="height:50px; width:100%; padding-left:13px; font-size:27px; ">
                             <b><span style="color: green;"><?php echo $datos['wins'] . " W" ?></span> <span style="color: red;"><?php echo $datos['losses'] . " L"?></span></b>
                        </div>
						<div style="height:50px; width:100%; padding-left:13px; font-size:24px; ">
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
    ?>
	</body>
</html>
