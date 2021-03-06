<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    public function usuario() {
        return $this->belongsTo(User::class);
    }

    public function producto() {
        return $this->hasMany(ItemReceta::class);
    }

}
