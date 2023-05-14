<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongToMany;
use App\Models\WorkOrder;
use App\Models\WorkRequest;
use App\Models\Machine;
use App\Models\Department;
use App\Models\Location;
use App\Models\Role;
use App\Models\Permission;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hasRole($role)
    {
        $roles = explode('|', $role);

        foreach ($roles as $singleRole) {
            if (optional($this->role)->name === $singleRole) {
                return true;
            }
        }

        return false;
    }

    public function hasPermission($permission)
    {
        $permissions = explode('|', $permission);

        foreach ($permissions as $singlePermission) {
            if (!optional($this->role)->permissions->contains('name', $singlePermission)) {
                return false;
            }
        }

        return true;
    }



}
