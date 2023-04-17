<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Location;
use App\Models\Matrial;

class SparePart extends Model
{
    use HasFactory;
    public function matrial(){
        return $this->hasMany(Matrial::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
}
