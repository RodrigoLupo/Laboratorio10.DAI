<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;
    public function Administrador()
    {
        return $this->hasMany(administradores::class);
    }
    public function Cliente()
    {
        return $this->hasMany(clientes::class);
    }
    public function Encargado()
    {
        return $this->hasMany(encargados::class);
    }
}
