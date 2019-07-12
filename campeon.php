<head>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="/Campeones/img-navi-tft-513c71b5.svg" />
    <link rel="shortcut icon" href="Images/icono.ico" />
    <link rel="stylesheet" type="text/css" href="stylechamps.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <?php
        use function PHPSTORM_META\type;
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
    <title><?php echo $datos["nombre"];?> - TFTEsp</title>
</head>

<body id="inicio">
    <div style="display: block;">
        <div id="navbar">
            <a href="/">
                <div id="leftbar"><img src="Images/newlogo.png" style="width:110px" alt="logo"></div>
            </a>
            <div id="midbar">
                <a class="navbarlink" href="index.php">INICIO</a>
                <a class="selected" href="campeones.php">CAMPEONES</a>
                <a class="navbarlink" href="items.html">OBJETOS</a>
                <a class="navbarlink" href="clases.html">CLASES Y ORIGENES</a>
                <a class="navbarlink" href="composiciones.html">COMPOSICIONES</a>
                <a class="navbarlink" href="constructor-de-equipo.html">CONSTRUCTOR DE EQUIPO</a>
            </div>
            <a href="https://twitter.com/TFT_Esp">
                <div id="rightbar"><img src="Images/twitter.png" style="width:18px; padding-top:18px;" alt="twitter">
                </div>
            </a>
        </div>
    </div>
    <div style="border:solid; min-width: 1150px; width: 60%; height: 600px;margin:auto;margin-top: 3%;color: #c9aa71; background-color: rgb(18,18,18, 0.75); ">
        <div style="border-bottom:solid;height: 110px;margin:auto; padding-top:20px;display: flex;align-items:center; justify-content: center; background-color: rgb(18,18,18); ">
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
							<td><img src="Images/oro.png" class="oroicon"><?php echo $datos['precio']?></img></td>
							<td><?php echo $datos['vida']?></td>
							<td><?php echo $datos['armadura']?></td>
							<td><?php echo $datos['rm']?></td>
							<td><?php echo $datos['dps']?></td>
							<td><?php echo $datos['dano']?></td>
							<td><?php echo $datos['vda']?></td>
							<?php
							if($datos['rango'] == 1){
								echo '<td style="font-size: 25px"><b style="color:white">|</b>||||<span class="hidetext">'. $datos['rango'] .'</span></td>';
							}elseif($datos['rango'] == 2){
								echo '<td style="font-size: 25px"><b style="color:white">||</b>|||<span class="hidetext">'. $datos['rango'] .'</span></td>';
							}elseif($datos['rango'] == 3){
								echo '<td style="font-size: 25px"><b style="color:white">|||</b>||<span class="hidetext">'. $datos['rango'] .'</span></td>';
							}elseif($datos['rango'] == 4){
								echo '<td style="font-size: 25px"><b style="color:white">||||</b>|<span class="hidetext">'. $datos['rango'] .'</span></td>';
							}elseif($datos['rango'] == 5){
								echo '<td style="font-size: 25px"><b style="color:white">|||||</b><span class="hidetext">'. $datos['rango'] .'</span></td>';
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
    <div id="footer" style="margin-top:100px;">
		<div style="float: left; height:100%; min-width: 415px; ">
			<div style="min-width: 415px; width: 415px; margin-top:10px; margin-left:10px;"><img
					src="Images/newlogo.png" style="width:50%">
			</div>
			<p1 align="bottom" style=" margin-left: 20px; ">© 2019 www.tftesp.com</p1>
		</div>
		<div style="min-width:200px; width: 50%; height: 100%; float:left; text-align:center;">
			<div style="width:60%; margin:auto; margin-top: 45px;">
				Teamfight Tactics ESP se creó según la política "Galimatías legal" de Riot Games usando recursos que
				son propiedad de Riot Games. Riot Games no respalda ni patrocina este proyecto.
			</div>
		</div>
		<div style="float: left; height:100%; width: 10%; min-width:200px;">
			<div style="margin-top:45px;">Contacto: tftesp@gmail.com <br>
				<a href="https://twitter.com/TFT_Esp">
					<img src="Images/twitter.png" style="width:20px; padding-top:8px;">
				</a>

			</div>
		</div>
	</div>
</body>