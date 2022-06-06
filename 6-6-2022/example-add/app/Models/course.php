<?php

namespace App\Models;

use App\Models\doctor;
use App\Models\student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class course extends Model
{
    use HasFactory;
    protected $fillable = ['id' , 'doctor_id'];

    public function get_student(){
        return $this->belongsToMany(student::class);
    }

    public function get_doctor(){
        return $this->belongsTo(doctor::class);
    }
}
