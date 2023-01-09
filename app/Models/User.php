<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\HasPermissions;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'avatar',
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

    public $timestamps = TRUE;
    
    /**
     * The roles that belong to the user.
     *
     * @return BelongsToMany
     */
    public function roles()
    {
        if ($this->id === 0) {
            return;
        }
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id');
    }

    /**
     * The user can get the properties of the role
     */
    public function getRolesFirst()
    {
        return $this->roles()->first();
    }

    /**
     * Check if the user has a role.
     */
    public function hasRoleById($roleId)
    {
        return $this->roles->pluck('id')->contains($roleId);
    }

    /**
     * Check if the user has a particular permission.
     */
    // public function isCan(string $permissionName): bool
    public function isCan(string $permissionName): bool
    {
        return $this->permissions()->contains($permissionName);
    }

    /**
     * Get all permissions belonging to a the current user.
     */
    protected function permissions()
    {
        $this->permissions = $this->newQuery()->getConnection()->table('role_user')
            ->select('permissions.name as name')->distinct()
            ->leftJoin('permission_role', 'role_user.role_id', '=', 'permission_role.role_id')
            ->leftJoin('permissions', 'permission_role.permission_id', '=', 'permissions.id')
            ->where('role_user.user_id', '=', $this->id)
            ->pluck('name');
        return $this->permissions;
    }
}
