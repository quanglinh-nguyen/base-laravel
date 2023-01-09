<?php

namespace App\Policies;

use App\Models\Acronym;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AcronymPolicy
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
        return ($user && $user->hasPermission('viewany_acronym'));
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Acronym  $acronym
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Acronym $acronym)
    {
        return ($user && $user->hasPermission('view_acronym'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return ($user && $user->hasPermission('create_acronym'));
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Acronym  $acronym
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Acronym $acronym)
    {
        return ($user && $user->hasPermission('update_acronym'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Acronym  $acronym
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Acronym $acronym)
    {
        return ($user && $user->hasPermission('delete_acronym'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Acronym  $acronym
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Acronym $acronym)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Acronym  $acronym
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Acronym $acronym)
    {
        //
    }
}
