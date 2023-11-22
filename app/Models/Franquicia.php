<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franquicia extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación de uno a muchos inversa (franquicia-user)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación de uno a muchos franquicia-comments
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //Utilozar slug en lugar de id
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
