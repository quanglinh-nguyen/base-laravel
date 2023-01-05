<?php

namespace App\Policies;

use App\Models\HistoryUpdateCustomer;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HistoryUpdateCustomerPolicy
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
        return ($user && $user->hasPermission('viewany_historycustomer'));
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HistoryUpdateCustomer  $historyUpdateCustomer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, HistoryUpdateCustomer $historyUpdateCustomer)
    {
        return ($user && $user->hasPermission('view_historycustomer'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return ($user && $user->hasPermission('create_historycustomer'));
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HistoryUpdateCustomer  $historyUpdateCustomer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, HistoryUpdateCustomer $historyUpdateCustomer)
    {
        return ($user && $user->hasPermission('update_historycustomer'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HistoryUpdateCustomer  $historyUpdateCustomer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, HistoryUpdateCustomer $historyUpdateCustomer)
    {
        return ($user && $user->hasPermission('delete_historycustomer'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HistoryUpdateCustomer  $historyUpdateCustomer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, HistoryUpdateCustomer $historyUpdateCustomer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HistoryUpdateCustomer  $historyUpdateCustomer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, HistoryUpdateCustomer $historyUpdateCustomer)
    {
        //
    }
}
