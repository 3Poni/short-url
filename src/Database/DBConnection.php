<?php

declare(strict_types=1);

namespace Src\Database;

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

    public function __construct()
    {
        $this->driver = env('DB_DRIVER');
        $this->dbname = env('DB_NAME') ?? '';
        $this->dbpath = env('DB_PATH') ? env('DB_PATH') . "{$this->dbname}.sqlite" : '';
        $this->host = env('DB_HOST');
        $this->login = env('DB_USERNAME');
        $this->password = env('DB_PASSWORD');
    }

    public function connect(): PDO|string
    {
        try{
            if('sqlite' === strtolower($this->driver)) {
                $this->pdo = new PDO("{$this->driver}:{$this->dbpath}", '','', [\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC]);
            }else {
                $this->pdo = new PDO(
                    "$this->driver:host=$this->host;dbname=$this->dbname",
                    $this->login,
                    $this->password,
//                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                );
            }
        }catch (PDOException $e) {
              return 'Error: ' . $e->getMessage();
        }
        return $this->pdo;
    }

    public function getLastId()
    {
        return $this->pdo->lastInsertId();
    }

}

