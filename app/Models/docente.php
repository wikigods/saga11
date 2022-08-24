<?php

namespace App\Models;
use App\Models\anioescolars;
use App\Models\seccion;
use App\Models\signature;
use App\Models\student_signature;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    use HasFactory;
    public function signature(){
        return $this->HasMany(signature::class, 'id_signature');
    }
    public function crp(){
        return $this->HasMany(crp::class, 'id_crp');
    }


}
