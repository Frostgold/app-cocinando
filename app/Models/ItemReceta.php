<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemReceta extends Model
{
    use HasFactory;

    public function producto() {
        return $this->belongsTo(Producto::class);
    }

    public function receta() {
        return $this->belongsTo(Receta::class);
    }
}
