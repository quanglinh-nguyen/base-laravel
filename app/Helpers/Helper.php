<?php
use App\Http\Controllers\Permissions\PermissionService;
use App\Models\Model;
use App\Models\User;

/**
 * Helper method to get the current User.
 *
 */
if (!function_exists('user')) {
    function user(): ?User
    {
        return auth()->user() ?: null;
    }
}

/**
 * Check if the current user has a permission.
 * is passed in the jointPermissions are checked against that particular item.
 */

if (!function_exists('userCan')) {
    function userCan(string $permission): bool
    {
        return user() && user()->isCan($permission);
    }
}

/**
 * Check if the current user has a roles.
 * is passed in the Roles are checked against that particular item.
 */
if (!function_exists('userCheckRole')) {
    function userCheckRole(string $permission): bool
    {
        return user() && user()->isCan($permission);
    }
}

