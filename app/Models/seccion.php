<?php

namespace App\Models;
use App\Models\anioescolars;
use App\Models\seccion;
use App\Models\signature;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seccion extends Model
{
    use HasFactory;
    public function anioescolars(){
        return $this->BelongsTo(anioescolars::class, 'anioescolar_id');
    }
    public function signature(){
        return $this->HasMany(signature::class, 'id_signature');
    }
    protected $fillable = [
        'nombre_seccion', 'grado','seccion'
    ];
}
