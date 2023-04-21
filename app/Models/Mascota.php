<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes;

class Mascota extends Model
{
    use HasFactory;
    public function getAllMascotas(){
        return $this->with('cliente')->get();
    }

    public function getMascota($id){
        return $this->with('cliente')->find($id);
    }

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_dni', 'dni');
    }
}
