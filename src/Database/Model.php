<?php

declare(strict_types=1);

namespace src\Database;

class Model
{
    protected DBConnection $connection;
    public function __construct(DBConnection $connection)
    {
        $this->connection = $connection;
    }

    public function query()
    {

    }
}

