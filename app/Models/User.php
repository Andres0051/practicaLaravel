<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     * Los atributos que se pueden asignar en masa.
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     * Los atributos que deben ocultarse para la serialización.
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     * Los atributos que se deben convertir.
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relacion de uno a uno (user - profile):
    public function profile(){
        return $this->hasOne(Profile::class);
    }

    //relacion de uno a muchos (user - article):
    public function articles(){
        return $this->hasMany(Article::class);
    }

    //relacion de uno a muchos (user - comment):
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    
}
