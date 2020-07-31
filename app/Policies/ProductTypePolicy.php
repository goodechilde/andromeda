<?php

namespace App\Policies;

use App\ProductType;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any product types.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        $permission = sprintf("%s product_types", __FUNCTION__);

        return has_permission($user, $permission) || $user->can('user::view:all');
    }

    /**
     * Determine whether the user can view the product type.
     *
     * @param  \App\User  $user
     * @param  \App\ProductType  $productType
     * @return mixed
     */
    public function view(User $user, ProductType $productType)
    {
        $permission = sprintf("%s product_types", __FUNCTION__);

        $viewAny = $this->viewAny($user);

        if (!is_null($viewAny)) {
            return $viewAny;
        }

        return $user->id === $productType->id || has_permission($user, $permission);
        ;
    }

    /**
     * Determine whether the user can create product types.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $permission = sprintf("%s product_types", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can update the product type.
     *
     * @param  \App\User  $user
     * @param  \App\ProductType  $productType
     * @return mixed
     */
    public function update(User $user, ProductType $productType)
    {
        $permission = sprintf("%s product_types", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can delete the product type.
     *
     * @param  \App\User  $user
     * @param  \App\ProductType  $productType
     * @return mixed
     */
    public function delete(User $user, ProductType $productType)
    {
        $permission = sprintf("%s product_types", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can restore the product type.
     *
     * @param  \App\User  $user
     * @param  \App\ProductType  $productType
     * @return mixed
     */
    public function restore(User $user, ProductType $productType)
    {
        $permission = sprintf("%s product_types", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can permanently delete the product type.
     *
     * @param  \App\User  $user
     * @param  \App\ProductType  $productType
     * @return mixed
     */
    public function forceDelete(User $user, ProductType $productType)
    {
        $permission = sprintf("%s product_types", __FUNCTION__);

        return has_permission($user, $permission);
    }
}
