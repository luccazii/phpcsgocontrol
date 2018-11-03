<?php
/**
 * Created by PhpStorm.
 * User: h_luc
 * Date: 13/10/2018
 * Time: 17:10
 */
require('classes/ServerController.class.php');

$map = $_GET['map'];
$serverIp = $_GET['server_ip'];
$serverPort = $_GET['server_port'];
$serverPassword = $_GET['server_password'];
$serverSlots = $_GET['server_slots'];

$Server = new Server();
$Server->setIp($serverIp);
$Server->setPort($serverPort);
$Server->setRcon("adamm");
$Server->setMap($map);
$Server->setPassword($serverPassword);
$Server->setSlots($serverSlots);

$ServerControl = new ServerController();
var_dump($ServerControl->restart($Server));


