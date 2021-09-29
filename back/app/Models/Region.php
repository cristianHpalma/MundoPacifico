<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'region';
    protected $primaryKey = 'id_region';
    public $timestamps = false;

    protected $appends = [
        'provincia'
    ];


    public function provincias()
    {
        return $this->hasMany(Provincia::class, 'id_region');
    }

    public function getProvinciaAttribute()
    {
        return $this->provincias()->get();
    }
}
