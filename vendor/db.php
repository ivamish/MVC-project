<?php


namespace vendor;


use vendor\traits\TSingletone;

class db
{
    use TSingletone;
    private \PDO $pdo;

    public function connect()
    {
        $conf = require_once CONF . '/db_config.php';
        $servername = $conf["localhost"];
        $username = $conf["username"];
        $password = $conf["password"];
        $myDB = $conf["db_name"];
        try {
            $this->pdo = new \PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function get() : \PDO
    {
        return $this->pdo;
    }
}