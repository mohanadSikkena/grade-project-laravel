<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongToMany;
use App\Models\WorkOrder;
use App\Models\WorkRequest;
use App\Models\Machine;
use App\Models\Department;
use App\Models\Location;

class Employee extends Model
{
    use HasFactory;
    public function workOrder(){
        return $this->hasMany(WorkOrder::class);
    }
    public function workRequest(){
        return $this->hasMany(WorkRequest::class);
    }
    public function machine(){
        return $this->belongsToMany(Machine::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
}
