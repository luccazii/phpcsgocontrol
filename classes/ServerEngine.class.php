<?php
/**
 * Created by PhpStorm.
 * User: h_luc
 * Date: 07/10/2018
 * Time: 20:49
 */

require __DIR__ . '/../SourceQuery/bootstrap.php';
use xPaw\SourceQuery\SourceQuery;

class ServerEngine{
    public function __construct($Server, $webQuery)
    {
        define( 'SQ_SERVER_ADDR', $Server->getIp() );
        define( 'SQ_SERVER_PORT', $Server->getPort() );
        define( 'SQ_TIMEOUT',     3 );
        define( 'SQ_ENGINE',      SourceQuery::SOURCE );
        $Query = new SourceQuery();
        try
        {
            $Query->Connect( SQ_SERVER_ADDR, SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
            $Query->SetRconPassword($Server->getRcon());
        }
        catch( Exception $e )
        {
            return $e->getMessage( ); //to test the return
        }
        $Query->Disconnect( );
    }
}