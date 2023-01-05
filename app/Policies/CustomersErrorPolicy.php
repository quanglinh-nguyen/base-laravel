<?php

namespace App\Policies;

use App\Models\CustomersError;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomersErrorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return ($user && $user->hasPermission('viewany_customererror'));
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CustomersError  $customersError
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, CustomersError $customersError)
    {
        return ($user && $user->hasPermission('view_customererror'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return ($user && $user->hasPermission('create_customererror'));
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CustomersError  $customersError
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, CustomersError $customersError)
    {
        return ($user && $user->hasPermission('update_customererror'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CustomersError  $customersError
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, CustomersError $customersError)
    {
        return ($user && $user->hasPermission('delete_customererror'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CustomersError  $customersError
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, CustomersError $customersError)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CustomersError  $customersError
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, CustomersError $customersError)
    {
        //
    }
}
