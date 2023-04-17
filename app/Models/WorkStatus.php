<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\WorkOrder;

class WorkStatus extends Model
{
    use HasFactory;
    public function workOrder(){
        return $this->hasMany(WorkOrder::class);
    }

}
