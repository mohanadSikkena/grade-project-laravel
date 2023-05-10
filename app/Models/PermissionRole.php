<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Permission;

class PermissionRole extends Model
{
    use HasFactory;

    public function role(){
        return $this->hasMany(Role::class);
    }
    public function permission(){
        return $this->hasMany(Permission::class);
    }

}
