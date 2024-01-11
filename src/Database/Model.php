<?php

declare(strict_types=1);

namespace Src\Database;

use Src\Database\DBConnection;

class Model
{
    protected DBConnection $connection;
    public function __construct(DBConnection $connection)
    {
        $this->connection = $connection;
    }

    public function where($field, $data)
    {
        $table = static::$table;
        $stmt = $this->connection->connect()
            ->prepare("SELECT * FROM {$table} WHERE {$field} = :data");
        $stmt->execute([':data' => $data]);
        return $stmt;
    }

    public function create($data)
    {
        $table = static::$table;
        $values  = str_repeat('?,', count($data) - 1) . '?';
        $fields = implode(',',array_keys($data));
        $stmt = $this->connection->connect()
            ->prepare("INSERT INTO {$table} ({$fields}) VALUES ({$values})");
        return $stmt->execute(array_values($data));
    }

    public function getLastId()
    {
        return $this->connection->getLastId();
    }

    public function fetch()
    {
        return $this->fetchAll();
    }

}

