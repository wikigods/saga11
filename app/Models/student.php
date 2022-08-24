<?php

namespace App\Models;
use App\Models\anioescolars;
use App\Models\seccion;
use App\Models\signature;
use App\Models\student;
use App\Models\student_signature;
use App\Models\crp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function signature(){
        return $this->BelongsToMany(signature::class, 'student_signature');
    }
    public function crp(){
        return $this->BelongsToMany(crp::class, 'student_crp');
    }
    protected $fillable = [
        'cedula','apellidos','nombres','lugarnac','estadonac','dianac','mesnac','anionac','seccion_id'
    ];

}

