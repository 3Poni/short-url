<?php

declare(strict_types=1);

namespace App\Models;

use src\Database\DBConnection;

class Data
{
    protected string $table = 'data';

    public function getAll(): array
    {
        $this->connection->query('SELECT * FROM' . $this->table);
    }
}