<html>
	<head>
        <meta http-equiv="refresh" content="180">
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	</head>
	<body>

<?php /*if(isset($_POST['nombre']) && $_POST['nombre'] != null){ */
	include 'riotapi.php';
    $controlador = new RiotAPI();
    $nombre = str_replace("_", " ", $_REQUEST['s']);
	$datosClasificatorias = $controlador->obtenerUsuario($_REQUEST['so'],$nombre);
    $datos = RiotAPI::obtenerInfoRankeds($_REQUEST['so'], $datosClasificatorias['id']);	
    if($datos!=null){

        if(isset($_REQUEST['d']) && $_REQUEST['d'] == 1){
?>



<div style="width:560px; position: absolute; background: url(static/originales/streamtftrank/1.png) no-repeat;  height: 250px;">
    <div style="width:180px; float: left; margin-top:10px; margin-left:10px;">
        <img style="width:180px;" src="static/base-icons/<?php echo strtolower($datos['tier']);  ?>.png" />
    </div>
    <div style="width:330px; float: left;  font-family: 'Anton', sans-serif;">
        <div style="height:40px; width:100%; padding-left:13px; margin-top:40px; font-size:40px; <?php if($datos['tier'] == 'PLATINUM'){
								echo '-webkit-text-fill-color: rgb(78, 152, 151);
                                -webkit-text-stroke-color: black;
                                -webkit-text-stroke-width: 2.50px;';		
						}else if($datos['tier'] == 'GOLD'){
						   echo '-webkit-text-fill-color: rgb(204, 138, 62);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'IRON'){
						   echo '-webkit-text-fill-color: rgb(112, 101, 114);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'BRONZE'){
						   echo '-webkit-text-fill-color: rgb(140, 81, 56);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'SILVER'){
						   echo '-webkit-text-fill-color: rgb(128, 152, 157);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'DIAMOND'){
						   echo '-webkit-text-fill-color: rgb(86, 107, 203);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'MASTER'){
						   echo '-webkit-text-fill-color: rgb(156, 71, 222);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'GRANDMASTER'){
						   echo '-webkit-text-fill-color: rgb(207, 66, 68);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'CHALLENGER'){
						   echo '-webkit-text-fill-color: rgb(63, 189, 220);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}
									?>">
			<?php echo $datos['tier'] . " " . $datos['rank']?>
        </div>
        <div style="height:50px; width:100%; margin-top:10px; padding-left:13px; font-size:35px; -webkit-text-fill-color: rgb(203,165,72);
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 2.00px;">
            <?php echo $datos['summonerName'] ?> <?php echo $datos['leaguePoints'] . " LP" ?>
        </div>
        <div style="height:50px; width:100%; padding-left:13px; font-size:27px; ">
             <span style="-webkit-text-fill-color: green;
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 1.70px;"><?php echo $datos['wins'] . " W" ?></span> <span style="-webkit-text-fill-color: red;
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 1.70px;"><?php echo $datos['losses'] . " L"?></span> <span style="-webkit-text-fill-color: rgb(203,165,72);
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 1.70px;">(<?php echo number_format($datos['wins']/ ($datos['wins']+$datos['losses'])*100, 2) . "%"?>)
        </div>
    </div>
</div>
    <?php
        }else if(isset($_REQUEST['d']) && ($_REQUEST['d'] == 2  || $_REQUEST['d'] == 4 || $_REQUEST['d'] == 5 )){

    ?>
    <!-- diseño 2 -->
    <div style="width:560px; position: absolute; background: url(static/originales/streamtftrank/<?php echo $_REQUEST['d']; ?>.png) no-repeat;  height: 250px; font-family: 'Poppins', sans-serif;">
    <div style="width:140px; float: left; margin-top:10px; margin-left:10px;">
        <img style="width:100px; margin-top:55px; margin-left: 16px;" src="static/base-rank-icons/<?php echo strtolower($datos['tier']);  ?>.png" />
    </div>
    <div style="width:330px; float: left;  font-family: 'Poppins', sans-serif; margin-top:13px;">
        <div style="height:40px; width:100%;  margin-top:40px; font-size:32px; <?php if($datos['tier'] == 'PLATINUM'){
								echo 'color: rgb(78, 152, 151)';		
						}else if($datos['tier'] == 'GOLD'){
						   echo 'color: rgb(204, 138, 62);';
						}else if($datos['tier'] == 'IRON'){
						   echo 'color: rgb(112, 101, 114);';
						}else if($datos['tier'] == 'BRONZE'){
						   echo 'color: rgb(140, 81, 56);';
						}else if($datos['tier'] == 'SILVER'){
						   echo 'color: rgb(128, 152, 157);';
						}else if($datos['tier'] == 'DIAMOND'){
						   echo 'color: rgb(86, 107, 203);';
						}else if($datos['tier'] == 'MASTER'){
						   echo 'color: rgb(156, 71, 222);';
						}else if($datos['tier'] == 'GRANDMASTER'){
						   echo 'color: rgb(207, 66, 68);';
						}else if($datos['tier'] == 'CHALLENGER'){
						   echo 'color: rgb(63, 189, 220);';
						}
									?>">
			<b><?php echo $datos['tier'] . " " . $datos['rank']?></b>
        </div>
        <div style="height:30px; width:100%;  font-size:26px; color: rgb(208, 206, 206);">
            <?php echo $datos['summonerName'] ?> <?php echo $datos['leaguePoints'] . " LP" ?>
        </div>
        <div style="height:35px; width:100%; font-size:22px; margin-top:3px;">
             <span style="color: rgb(0, 176, 80);"><?php echo $datos['wins'] . " W" ?></span> <span style="color: rgb(242, 58, 76);"><?php echo $datos['losses'] . " L"?></span> <span style="color: rgb(208, 206, 206);">(<?php echo number_format($datos['wins']/ ($datos['wins']+$datos['losses'])*100, 2) . "%"?>)
        </div>
    </div>
</div>

    <?php
        }else if(isset($_REQUEST['d']) && $_REQUEST['d'] == 3){

    ?> 

<div style="width:560px; position: absolute; background: url(static/originales/streamtftrank/<?php echo $_REQUEST['d']; ?>.png) no-repeat;  height: 250px; font-family: 'Poppins', sans-serif;">
    <div style="width:140px; float: left;  margin-left:10px;">
        <img style="width:100px; margin-top:35px; margin-left: 16px;" src="static/base-rank-icons/<?php echo strtolower($datos['tier']);  ?>.png" />
    </div>
    <div style="width:330px; float: left;  font-family: 'Poppins', sans-serif; margin-top:23px;">
        <div style="height:40px; width:100%;  font-size:32px; <?php if($datos['tier'] == 'PLATINUM'){
								echo 'color: rgb(78, 152, 151)';		
						}else if($datos['tier'] == 'GOLD'){
						   echo 'color: rgb(204, 138, 62);';
						}else if($datos['tier'] == 'IRON'){
						   echo 'color: rgb(112, 101, 114);';
						}else if($datos['tier'] == 'BRONZE'){
						   echo 'color: rgb(140, 81, 56);';
						}else if($datos['tier'] == 'SILVER'){
						   echo 'color: rgb(128, 152, 157);';
						}else if($datos['tier'] == 'DIAMOND'){
						   echo 'color: rgb(86, 107, 203);';
						}else if($datos['tier'] == 'MASTER'){
						   echo 'color: rgb(156, 71, 222);';
						}else if($datos['tier'] == 'GRANDMASTER'){
						   echo 'color: rgb(207, 66, 68);';
						}else if($datos['tier'] == 'CHALLENGER'){
						   echo 'color: rgb(63, 189, 220);';
						}
									?>">
			<b><?php echo $datos['tier'] . " " . $datos['rank']?></b>
        </div>
        <div style="height:30px; width:100%;  font-size:26px; color: rgb(208, 206, 206);">
            <?php echo $datos['summonerName'] ?> <?php echo $datos['leaguePoints'] . " LP" ?>
        </div>
        <div style="height:35px; width:100%; font-size:22px; margin-top:3px;">
             <span style="color: rgb(0, 176, 80);"><?php echo $datos['wins'] . " W" ?></span> <span style="color: rgb(242, 58, 76);"><?php echo $datos['losses'] . " L"?></span> <span style="color: rgb(208, 206, 206);">(<?php echo number_format($datos['wins']/ ($datos['wins']+$datos['losses'])*100, 2) . "%"?>)
        </div>
    </div>
</div>

    <?php
        }else{
?>

<div style="width:560px; position: absolute; background: url(static/originales/streamtftrank/1.png) no-repeat;  height: 250px;">
    <div style="width:180px; float: left; margin-top:10px; margin-left:10px;">
        <img style="width:180px;" src="static/base-icons/<?php echo strtolower($datos['tier']);  ?>.png" />
    </div>
    <div style="width:330px; float: left;  font-family: 'Anton', sans-serif;">
        <div style="height:40px; width:100%; padding-left:13px; margin-top:40px; font-size:40px; <?php if($datos['tier'] == 'PLATINUM'){
								echo '-webkit-text-fill-color: rgb(78, 152, 151);
                                -webkit-text-stroke-color: black;
                                -webkit-text-stroke-width: 2.50px;';		
						}else if($datos['tier'] == 'GOLD'){
						   echo '-webkit-text-fill-color: rgb(204, 138, 62);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'IRON'){
						   echo '-webkit-text-fill-color: rgb(112, 101, 114);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'BRONZE'){
						   echo '-webkit-text-fill-color: rgb(140, 81, 56);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'SILVER'){
						   echo '-webkit-text-fill-color: rgb(128, 152, 157);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'DIAMOND'){
						   echo '-webkit-text-fill-color: rgb(86, 107, 203);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'MASTER'){
						   echo '-webkit-text-fill-color: rgb(156, 71, 222);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'GRANDMASTER'){
						   echo '-webkit-text-fill-color: rgb(207, 66, 68);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}else if($datos['tier'] == 'CHALLENGER'){
						   echo '-webkit-text-fill-color: rgb(63, 189, 220);
                           -webkit-text-stroke-color: black;
                           -webkit-text-stroke-width: 2.50px;';
						}
									?>">
            <?php echo $datos['tier'] . " " . $datos['rank']?>
        </div>
        <div style="height:50px; width:100%; margin-top:10px; padding-left:13px; font-size:35px; -webkit-text-fill-color: rgb(203,165,72);
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 2.00px;">
            <?php echo $datos['summonerName'] ?> <?php echo $datos['leaguePoints'] . " LP" ?>
        </div>
        <div style="height:50px; width:100%; padding-left:13px; font-size:27px; ">
             <span style="-webkit-text-fill-color: green;
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 1.70px;"><?php echo $datos['wins'] . " W" ?></span> <span style="-webkit-text-fill-color: red;
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 1.70px;"><?php echo $datos['losses'] . " L"?></span> <span style="-webkit-text-fill-color: rgb(203,165,72);
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 1.70px;">(<?php echo number_format($datos['wins']/ ($datos['wins']+$datos['losses'])*100, 2) . "%"?>)
        </div>
    </div>
</div>
<?php
        }
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
