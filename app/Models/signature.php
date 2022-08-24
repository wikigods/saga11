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

class signature extends Model
{
    use HasFactory;
    public function seccion(){
        return $this->BelongsTo(seccion::class, 'seccion_id');
    }
    public function Users(){
        return $this->BelongsTo(Users::class, 'user_id');
    }
    public function student(){
        return $this->BelongsToMany(Student::class, 'student_signature');
    }

    protected $fillable = [
    'nombre','abreviatura', 
];
}
