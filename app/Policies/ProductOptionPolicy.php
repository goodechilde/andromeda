<?php

namespace App\Policies;

use App\ProductOption;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductOptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any product options.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        $permission = sprintf("%s product_options", __FUNCTION__);

        return has_permission($user, $permission) || $user->can('user::view:all');
    }

    /**
     * Determine whether the user can view the product option.
     *
     * @param  \App\User  $user
     * @param  \App\ProductOption  $productOption
     * @return mixed
     */
    public function view(User $user, ProductOption $productOption)
    {
        $permission = sprintf("%s product_options", __FUNCTION__);

        $viewAny = $this->viewAny($user);

        if (!is_null($viewAny)) {
            return $viewAny;
        }

        return $user->id === $productOption->id || has_permission($user, $permission);;
    }

    /**
     * Determine whether the user can create product options.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $permission = sprintf("%s product_options", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can update the product option.
     *
     * @param  \App\User  $user
     * @param  \App\ProductOption  $productOption
     * @return mixed
     */
    public function update(User $user, ProductOption $productOption)
    {
        $permission = sprintf("%s product_options", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can delete the product option.
     *
     * @param  \App\User  $user
     * @param  \App\ProductOption  $productOption
     * @return mixed
     */
    public function delete(User $user, ProductOption $productOption)
    {
        $permission = sprintf("%s product_options", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can restore the product option.
     *
     * @param  \App\User  $user
     * @param  \App\ProductOption  $productOption
     * @return mixed
     */
    public function restore(User $user, ProductOption $productOption)
    {
        $permission = sprintf("%s product_options", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can permanently delete the product option.
     *
     * @param  \App\User  $user
     * @param  \App\ProductOption  $productOption
     * @return mixed
     */
    public function forceDelete(User $user, ProductOption $productOption)
    {
        $permission = sprintf("%s product_options", __FUNCTION__);

        return has_permission($user, $permission);
    }
}
