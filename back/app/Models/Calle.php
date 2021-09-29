<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{
    use HasFactory;

    protected $table = 'calle';
    protected $primaryKey = 'id_calle';
    public $timestamps = false;
}
