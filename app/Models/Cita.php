<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mascota;

class Cita extends Model
{
    use HasFactory;

    public function getAllCitas(){
        return $this->All();
    }

    public function mascotas(){
        return $this->hasMany(Mascota::class, 'id', 'id_mascota');
    }

    public function getCita($id){
        return $this->with('mascotas')->find($id);
    }
}
