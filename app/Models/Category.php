<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     //atributos que se van a asignar de forma masiva:
    protected $fillable = [
        'name',
        'slug',
        'image',
        'is_feature',
        'status',
    ];

    //asignar los campos que no se van a implementar de forma masiva:
        protected $guarded = ['id', created_at, update_at];

    //relacion de uno a muchos  (article - categories):
    public  function articles(){
        return $this->hasMany(Article::class);
    }
}
