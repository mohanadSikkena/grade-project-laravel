<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Machine;
use App\Models\Matrial;

class Criticaly extends Model
{
    use HasFactory;
    public function machine(){
        return $this->hasMany(Machine::class);
    }
    public function matrial(){
        return $this->hasMany(Matrial::class);
    }
}
