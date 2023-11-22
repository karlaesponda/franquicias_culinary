<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'direccion',
        'cp',
        'telefono'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //Relacion de usuario-franqucias de uno a muchos
    public function franquicias(){
        return $this->hasMany(Franquicia::class);       
    }

    //Relacion de usuario-comment uno a muchos
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function subscriptions(){
        return $this->hasMany(Subscription::class,'user_id');
    }

    public function permissionRoles()
    {
        return $this->morphMany(ModelHasRol::class, 'model');
    }
}
