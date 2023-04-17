<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\WorkStatus;
use App\Models\WorkTrade;
use App\Models\WorkType;
use App\Models\Employee;
use App\Models\Machine;
use App\Models\WorkPriority;

class WorkOrder extends Model
{
    use HasFactory;
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function workStatus(){
        return $this->belongsTo(WorkStatus::class);
    }
    public function workType(){
        return $this->belongsTo(WorkType::class);
    }
    public function workPriority(){
        return $this->belongsTo(WorkPriority::class);
    }
    public function workTrade(){
        return $this->belongsTo(WorkTrade::class);
    }
    public function machine(){
        return $this->belongsTo(Machine::class);
    }
}
