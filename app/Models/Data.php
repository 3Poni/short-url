<?php

declare(strict_types=1);

namespace App\Models;

use Src\Database\Model;

class Data extends Model
{
    protected string $table = 'data';

    public function getAll()
    {
        return $this->fetch('SELECT * FROM ' . $this->table);
    }
}