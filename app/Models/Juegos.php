<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Juegos extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'precio',
        'descripcion',
        'idUsuario',
        'nombreImagen',
        'ruta',
    ];

    public function users() {

    	return $this->belongsToMany(User::class);

    }

}
