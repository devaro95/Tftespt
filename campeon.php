<head>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="/Campeones/img-navi-tft-513c71b5.svg" />
    <link rel="shortcut icon" href="Images/icono.ico" />

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
    <div style="border:solid; width: 60%;height: 700px;margin:auto;margin-top: 3%;color: #c9aa71; background-color: rgb(18,18,18, 0.75); ">
        <div style="border-bottom:solid;height: 110px;margin:auto; padding-top:20px;display: flex;align-items:center; justify-content: center; background-color: rgb(18,18,18); ">
            <div>
            <?php 
                print 
                "<img src='static/campeones/". $datos['id']. ".png' style='width:75px;' alt=". $datos['nombre'] ." />"
                ?>
            </div>
            
            <div style="font-size:100px; margin-left:15px">
            
                <?php
                    print $datos['nombre'];
                ?>
            </div>
        </div>
        
        <?php 
            print 
            "<div style='float: left; background: url(static/campeonesrender/". $datos['id']. ".png) no-repeat center center;
                 width:40%; height: 567px; background-size: contain;   overflow-y: hidden ! important;
                 overflow-x: hidden ! important;'>           
            </div>";
        ?>
        <div style="width:58%; float: left; font-size: 25px; margin-left:10px;margin-top:10px;">
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
                <div style="width:78%; float: left; margin-left:10px;margin-top:10px; font-size: 18px;">
                    <?php 
                    print $datos['descripcionhabilidad'];
                    
                    ?>
                </div>
        </div>
    </div>
</body>