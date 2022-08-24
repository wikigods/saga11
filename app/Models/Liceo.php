<?php

namespace App\Models;
use App\Models\anioescolar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liceo extends Model
{
    use HasFactory;
    public function anioescolars(){
        return $this->HasMany(anioescolars::class, 'id_anioescolar');
   
    }
   
    protected $fillable = [
        'codigoplantel','nombreliceo', 'direccionliceo','telefonoliceo', 'municipio','distritofederal','zonaeducativa','director','ceduladirector'
    ];
    
}
