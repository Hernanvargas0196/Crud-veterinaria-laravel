<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mascota;

class Clientes extends Model
{
    use HasFactory;
    protected $primaryKey = 'dni';
    public function getAllClientes(){
        return $this->all();
    }

    public function getCliente($dni){
        return $this->find($dni);
    }

    public function mascotas()
    {
        return $this->hasMany(Mascota::class, 'cliente_dni', 'dni');
    }
}
