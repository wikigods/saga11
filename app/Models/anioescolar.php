<?php

namespace App\Models;
use App\Models\liceo;
use App\Models\anioescolar;
use App\Models\seccion;
use App\Models\signature;
use App\Models\student_signature;
use App\Models\student_crp;
use App\Models\crp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anioescolar extends Model
{
    use HasFactory;
    public function liceo(){
        return $this->BelongsTo(Liceo::class, 'id_liceo');
    }
    public function seccion(){
        return $this->HasMany(seccion::class, 'id_seccion');
    }
    public function crp(){
        return $this->HasMany(crp::class, 'id_crp');
    }
    protected $fillable = [
    'nombreanioescolar','fechainicio', 'fechafin','liceo_id', 
];
}

