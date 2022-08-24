<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calificacion extends Model
{
    use HasFactory;
    public function student(){
        return $this->BelongsTo(student::class, 'student_id');
    }
    public function signature(){
        return $this->BelongsTo(signature::class, 'signature_id');
    }
    public function crp(){
        return $this->BelongsToMany(crp::class, 'crp_id');
    }

    protected $fillable = [
    'momento1', 'momento2','momento3','definitiva', 
];
}
