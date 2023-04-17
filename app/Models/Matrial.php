<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Location;
use App\Models\Category;
use App\Models\Criticaly;
use App\Models\SparePart;

class Matrial extends Model
{
    use HasFactory;
    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function criticaly(){
        return $this->belongsTo(Criticaly::class);
    }
    public function sparePart(){
        return $this->belongsTo(SparePart::class);
    }

}
