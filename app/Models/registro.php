<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;
    protected $connection = 'tps';
    protected $primaryKey = 'id';
    public $table = 'registros';
    public $timesTamps = 'true';
}
