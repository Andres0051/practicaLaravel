<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    //atributos que se van a asignar de forma masiva:
    protected $fillable = [
        'value',
        'description',
    ];

    //asignar los campos que no se van a implementar de forma masiva:
    protected $guarded = ['id', created_at, update_at];

     //relacion de uno a muchos inversa (article - user):
     public  function user(){
        return $this->belongsTo(User::class);
    }

     //relacion de uno a muchos inversa (comments - article):
     public  function article(){
        return $this->belongsTo(Article::class);
    }
}
