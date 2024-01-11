<?php

declare(strict_types=1);

namespace App\Models;

use Src\Database\Model;

class User extends Model
{
    protected static string $table = 'users';

//    public function getAll(): array
//    {
//        return $this->connection->query('SELECT * FROM ' . $this->table);
//    }

//    public function where($field, $data): array
//    {
//        return $this->connection->fetch("SELECT * FROM {$this->table} WHERE {$field} = {$data}")->execute();
//    }
//    public function getAll(): array
//    {
//        return $this->connection->query('SELECT * FROM' . $this->table);
//    }
}