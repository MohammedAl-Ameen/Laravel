<?php

namespace App\Models;

use App\Models\course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    use HasFactory;
    protected $fillable = ['id' , 'name' , 'major'];

    public function get_course(){
        return $this->belongsToMany(course::class);
    }


    public function get_student($id){

        return (student::where('id' , 'like' , '%' . $id. '%'));

    }
}
