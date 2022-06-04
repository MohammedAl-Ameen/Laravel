<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;


    protected $fillable = ['name' , 'email'];

    public function scopeFilter($query , array $filters){
        if($filters['id'] ?? false){
            return $query->where('id' , 'like' , '%' . request('id'). '%');
        }


            if($filters['search'] ?? false){
                return $query->where('id' , 'like' , '%' . request('search'). '%')
                ->orWhere('name' , 'like' , '%' . request('search'). '%')
                ;
            }

    }
}
