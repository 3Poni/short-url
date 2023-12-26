<?php

declare(strict_types=1);

namespace src\Database;

use PDO;
use PDOException;

class DBConnection
{
    private string $driver;
    private string $host;
    private string $dbname;
    private string $login;
    private string $password;

    public PDO $pdo;

    public function __construct($config)
    {
        $this->driver = $config['driver'];
        $this->host = $config['host'];
        $this->dbname = $config['dbname'];
        $this->login = $config['login'];
        $this->password = $config['password'];
    }

    public function connect(): PDO|string
    {
        try{
            $this->pdo = new PDO(
                "$this->driver:host=$this->host;dbname=$this->dbname",
                $this->login,
                $this->password,
//                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            );
        }catch (PDOException $e) {
              return 'Error: ' . $e->getMessage();
        }
        return $this->pdo;
    }

}

