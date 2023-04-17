<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Machine;

class MachineCode extends Model
{
    use HasFactory;
    public function machine(){
        return $this->hasOne(Machine::class);
    }
}
