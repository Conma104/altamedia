<?php
namespace System\Core;

use Exception;
use mysqli;

class Database {
    protected $conn;

    public function  __construct()
    {
        global $_Config;

        $driver = $_Config['database']['driver'];

    switch ($driver) {
        case 'mysql':
            $this->connectMysql($_Config['database']['mysql']);
        break;


        case 'sqlserver':
            $this->connectsqlserver($_Config['database']['sqlserver']);
        break;
    }
}



    protected function connectMysql($info = []) {
        $this->conn = new mysqli($info['servername'], $info['username'], $info['password'], $info['database']);
        if ($this->conn->connect_error) {
            throw new Exception('Connect error');
        }
        $this->conn->set_charset($info['charset']);

        return $this;
    }

    protected function connectsqlserver($info = []) {
       
    }
}



?>