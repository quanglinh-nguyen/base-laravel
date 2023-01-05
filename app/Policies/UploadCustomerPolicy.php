<?php

namespace App\Policies;

use App\Models\UploadCustomer;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UploadCustomerPolicy
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
        return ($user && $user->hasPermission('viewany_customerupload'));
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UploadCustomer  $uploadCustomer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, UploadCustomer $uploadCustomer)
    {
        return ($user && $user->hasPermission('view_customerupload'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return ($user && $user->hasPermission('create_customerupload'));
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UploadCustomer  $uploadCustomer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, UploadCustomer $uploadCustomer)
    {
        return ($user && $user->hasPermission('update_customerupload'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UploadCustomer  $uploadCustomer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, UploadCustomer $uploadCustomer)
    {
        return ($user && $user->hasPermission('delete_customerupload'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UploadCustomer  $uploadCustomer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, UploadCustomer $uploadCustomer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UploadCustomer  $uploadCustomer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, UploadCustomer $uploadCustomer)
    {
        //
    }
}
