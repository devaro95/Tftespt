<head>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $basededatos = "ftfesp";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $basededatos);
        // Check connection
        $consulta = "Select * from noticias where id = 1";
        $con = mysqli_query($conn, $consulta);
        $con = mysqli_fetch_assoc($con);
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="parchestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8" />
    <title><?php echo $con['titular']; ?> - TFTEsp</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body id="inicio" style="width: 100%;">
    <div style="display: block;">
        <div id="navbar">
            <a href="/">
                <div id="leftbar"><img src="Images/newlogo.png" style="width:110px"></div>
            </a>
            <div id="midbar">
            <a class="navbarlink" href="index.html">INICIO</a>
                <a class="selected" href="campeones.html">CAMPEONES</a>
                <a class="navbarlink" href="items.html">OBJETOS</a>
                <a class="navbarlink" href="clases.html">CLASES Y ORIGENES</a>
                <a class="narvarDisabled">CONSTRUCTOR DE EQUIPO</a>
            </div>
            <a href="https://twitter.com/TFT_Esp">
                <div id="rightbar"><img src="Images/twitter.png" style="width:45px; padding-top:8px;"></div>
            </a>
        </div>
    </div>
    <div id="menu">
        <div style="background: rgb(18,18,18, 0.75); border: 2px solid #c9aa71;color: #c9aa71">
            <div style="width: 100%;text-align: center">
                <div style="width:100%">
                    <!--Imagen noticia-->
                    <img src="tf-soon.jpg" style="width: 100%;border-bottom: solid #c9aa71;">
                </div>
                <!--Titulo noticia-->
                <h1><?php echo $con['titular']; ?></h1>
                <p>

                </p>
            </div>
        </div>
    </div>
</body>