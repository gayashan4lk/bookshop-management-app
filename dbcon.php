<?php

class DBCon {

    // Connection information
    private $DB_HOST = 'localhost';
    private $DB_USER = 'root';
    private $DB_PASSWORD = '';
    private $DB_NAME = 'sp';
    private $oConnection = null;

    function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->oConnection = mysql_connect($this->DB_HOST, $this->DB_USER, $this->DB_PASSWORD) or die('Error connecting to mysql');
        mysql_select_db($this->DB_NAME) or die('ERROR : Mysql error' . mysql_error());
    }

    public function db_query($sQuery, $sType = 'object') {
        $oResult = mysql_query($sQuery);
        if (!$oResult) {
            die('Invalid query: ' . mysql_error());
        } else {
            $aData = array();
            switch ($sType) {
                case 'object':
                    while ($oRes = mysql_fetch_object($oResult)) {
                        $aData[] = $oRes;
                    }
                    break;
                case 'array':
                    while ($oRes = mysql_fetch_array($oResult)) {
                        $aData[] = $oRes;
                    }
                    break;
                case 'query':
                    return TRUE;
                    break;
            }
            return $aData;
        }
    }

    public function close_connection() {
        mysql_close($this->oConnection);
    }

}

$db = new DBCon();
