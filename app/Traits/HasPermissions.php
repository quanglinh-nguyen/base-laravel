<?php
namespace App\Traits;

use App\Models\Role;

/**
 *
 */
trait HasPermissions
{
    /**
     * @var null
     */
    protected $permissionList = null;

    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @param $role
     * @return false
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return false;
    }

    /**
     * @param $permission
     * @return bool
     */
    public function hasPermission($permission = null)
    {
        if (is_null($permission)) {
            return $this->getPermissions()->count() > 0;
        }

        if (is_string($permission)) {
            return $this->getPermissions()->contains('name', $permission);
        }

        return false;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    private function getPermissions()
    {
        $role = $this->roles->first();
        if ($role) {
            if (! $role->relationLoaded('permissions')) {
                $this->roles->load('permissions');
            }

            $this->permissionList = $this->roles->pluck('permissions')->flatten();
        }

        return $this->permissionList ?? collect();
    }
}
