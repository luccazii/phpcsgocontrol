<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: h_luc
 * Date: 07/10/2018
 * Time: 21:47
 */
$serverIp = $_GET['ip'];
$serverPort = $_GET['port'];
?>
<html lang="pt-br">
<head>
    <title>Choosemap Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/newTheme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Escolher Mapa</h1>
    <p>Escolha o mapa do servidor.</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Teste</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mapas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Outro</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style="margin-top:30px; margin-bottom:50px">
    <div class="row">
        <div class="col-sm-4">
            <div class="map">
                <a href="changer.php?map=de_dust2&server_ip=<?php echo $serverIp; ?>&server_port=<?php echo $serverPort; ?>&server_slots=16&server_password=oi">
                    <img width="350" src='img/maps/map_dust2.jpeg'>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="map">
                <a href="changer.php?map=de_mirage&server_ip=<?php echo $serverIp; ?>&server_port=<?php echo $serverPort; ?>&server_slots=16&server_password=oi">
                    <img width="350" src='img/maps/map_mirage.png'>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="map">
                <a href="changer.php?map=de_nuke&server_ip=<?php echo $serverIp; ?>&server_port=<?php echo $serverPort; ?>&server_slots=16&server_password=oi">
                    <img width="350" src='img/maps/map_nuke.jpg'>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
</div>

</body>
</html>
