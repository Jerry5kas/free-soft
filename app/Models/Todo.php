<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    const TABLE = 'todos';
    protected $table = self::TABLE;

    protected $guarded = [];
}
