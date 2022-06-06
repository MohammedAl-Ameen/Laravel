<?php

namespace App\Models;

use App\Models\course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class doctor extends Model
{
    use HasFactory;
    protected $fillable = ['id' , 'name'];
    
    public function get_course(){
        return $this->hasMany(course::class);
    }
}
