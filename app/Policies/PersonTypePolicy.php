<?php

namespace App\Policies;

use App\PersonType;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PersonTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any person types.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        $permission = sprintf("%s person_types", __FUNCTION__);

        return has_permission($user, $permission) || $user->can('user::view:all');
    }

    /**
     * Determine whether the user can view the person type.
     *
     * @param  \App\User  $user
     * @param  \App\PersonType  $personType
     * @return mixed
     */
    public function view(User $user, PersonType $personType)
    {
        $permission = sprintf("%s person_types", __FUNCTION__);

        $viewAny = $this->viewAny($user);

        if (!is_null($viewAny)) {
            return $viewAny;
        }

        return $user->id === $personType->id || has_permission($user, $permission);;
    }

    /**
     * Determine whether the user can create person types.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $permission = sprintf("%s person_types", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can update the person type.
     *
     * @param  \App\User  $user
     * @param  \App\PersonType  $personType
     * @return mixed
     */
    public function update(User $user, PersonType $personType)
    {
        $permission = sprintf("%s person_types", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can delete the person type.
     *
     * @param  \App\User  $user
     * @param  \App\PersonType  $personType
     * @return mixed
     */
    public function delete(User $user, PersonType $personType)
    {
        $permission = sprintf("%s person_types", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can restore the person type.
     *
     * @param  \App\User  $user
     * @param  \App\PersonType  $personType
     * @return mixed
     */
    public function restore(User $user, PersonType $personType)
    {
        $permission = sprintf("%s person_types", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can permanently delete the person type.
     *
     * @param  \App\User  $user
     * @param  \App\PersonType  $personType
     * @return mixed
     */
    public function forceDelete(User $user, PersonType $personType)
    {
        $permission = sprintf("%s person_types", __FUNCTION__);

        return has_permission($user, $permission);
    }
}
