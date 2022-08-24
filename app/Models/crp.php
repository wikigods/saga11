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

class crp extends Model
{
    use HasFactory;
    public function anioescolars(){
        return $this->BelongsTo(anioescolars::class, 'anioescolar_id');
    }
    public function User(){
        return $this->BelongsTo(User::class, 'user_id');
    }
    public function student(){
        return $this->HasMany(student::class, 'id_student');
    }
    protected $fillable = [
    'nombre', 
];
}
