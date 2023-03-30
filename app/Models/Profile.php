<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    //atributos que se van a asignar de forma masiva:
    protected $fillable = [
        'full_name',
        'email',
        'password',
    ];

    //asignar los campos que no se van a implementar de forma masiva:
    protected $guarded = ['id', created_at, update_at];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    //relacion de uno a uno inversa (profile - user):
    public  function user(){
        return $this->belongsTo(User::class);
    }

    //
}
