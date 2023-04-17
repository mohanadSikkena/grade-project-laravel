<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\WorkOrder;
use App\Models\WorkRequest;
use App\Models\Department;
use App\Models\Location;
use App\Models\Category;
use App\Models\Criticaly;
use App\Models\MachineCode;
use App\Models\Employee;

class Machine extends Model
{
    use HasFactory;
    public function workOrder(){
        return $this->hasMany(WorkOrder::class);
    }
    public function workRequest(){
        return $this->hasMany(WorkRequest::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function criticaly(){
        return $this->belongsTo(Criticaly::class);
    }
    public function machineCode(){
        return $this->belongsTo(MachineCode::class);
    }
    public function employee(){
        return $this->belongsToMany(Employee::class);
    }
}
