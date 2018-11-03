<?php
/**
 * Created by PhpStorm.
 * User: h_luc
 * Date: 07/10/2018
 * Time: 20:30
 */

require('Server.class.php');
include('ServerEngine.class.php');

class ServerController{
    public function changeMap($Server)
    {
        $webQuery = "map " . $Server->getMap();
        $ServerEngine = new ServerEngine($Server, $webQuery);
        return $ServerEngine;
    }
    public function restart($Server)
    {
        $webQuery = "map " . $Server->getMap();
        $ServerEngine = new ServerEngine($Server, $webQuery);
        return $ServerEngine;
    }
}