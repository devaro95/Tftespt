<head>
    <?php

        $conn = mysqli_connect("PMYSQL110.dns-servicio.com", "varo", "&qdGw743", "6795849_tftesp");
        mysqli_set_charset($conn,'UTF8');
        $consulta = 'select * from noticias where slug = "'.$_REQUEST['s'].'"';
        $resultado = $conn->query($consulta);
        $datos = $resultado->fetch_assoc();

    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="parchestyle.css">
    <link rel="stylesheet" type="text/css" href="noticiasstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8" />
    <title><?php echo $datos['titular']; ?> - TFTEsp</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body id="inicio" style="width: 100%;">
    <div style="display: block;">
        <div id="navbar">
            <a href="/">
                <div id="leftbar"><img src="Images/newlogo.png" style="width:110px"></div>
            </a>
            <div id="midbar">
                <a class="navbarlink" href="index.php">INICIO</a>
                <a class="navbarlink" href="campeones.php">CAMPEONES</a>
                <a class="navbarlink" href="items.html">OBJETOS</a>
                <a class="navbarlink" href="clases.html">CLASES Y ORIGENES</a>
                <a class="navbarlink" href="composiciones.html">COMPOSICIONES</a>
                <a class="narvarDisabled">CONSTRUCTOR DE EQUIPO</a>
            </div>
            <a href="https://twitter.com/TFT_Esp">
                <div id="rightbar"><img src="Images/twitter.png" style="width:45px; padding-top:8px;"></div>
            </a>
        </div>
    </div>
    <div id="menuNoticias">
        <div style="background: rgb(18,18,18, 0.75); border: 2px solid #c9aa71;color: #c9aa71">
            <div style="width: 100%;text-align: center">
                <div style="width:100%">
                    <!--Imagen noticia-->
                    <img src=<?php echo '"/static/noticias/'.$datos['foto'].'"'?> style="width: 100%;border-bottom: solid #c9aa71;">
                </div>
                <!--Titulo noticia-->
                <div id="tituloNoticia">
                    <?php echo $datos['titular']; ?> </h1>
                </div>
                <?php $arr = explode(PHP_EOL,$datos['noticia']);
                    foreach($arr as $line){
                        if(!strcmp(substr($line,0,3),'###')){
                            print(
                                "<div class='titularnoticias'>
                                ".substr($line,3)."
                                </div>"
                            ) ;
                        } else {
                            print("
                            <div class='descripcionNoticia'>
                              ".$line."
                            </div>");
                        }
                    }?>
            </div>
        </div>

    </div>
    <div id="footer">
        <div style="float: left; height:100%; min-width: 415px; ">
            <div style="min-width: 415px; width: 415px; margin-top:10px; margin-left:10px;"><img
                    src="Images/newlogo.png" style="width:50%">
            </div>
            <p1 align="bottom" style=" margin-left: 20px; ">© 2019 www.tftesp.com</p1>
        </div>
        <div style="min-width:200px; width: 50%; height: 100%; float:left; text-align:center;">
            <div style="width:60%; margin:auto; margin-top: 45px;">
                Teamfight Tactics ESP se creó según la política "Galimatías legal" de Riot Games usando
                recursos que
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