<?php

namespace App\Policies;

use App\Person;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PersonPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any people.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        $permission = sprintf("%s people", __FUNCTION__);

        return has_permission($user, $permission) || $user->can('user::view:all');
    }

    /**
     * Determine whether the user can view the person.
     *
     * @param  \App\User  $user
     * @param  \App\Person  $person
     * @return mixed
     */
    public function view(User $user, Person $person)
    {
        $permission = sprintf("%s people", __FUNCTION__);

        $viewAny = $this->viewAny($user);

        if (!is_null($viewAny)) {
            return $viewAny;
        }

        return $user->id === $person->id || has_permission($user, $permission);
        ;
    }

    /**
     * Determine whether the user can create people.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $permission = sprintf("%s people", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can update the person.
     *
     * @param  \App\User  $user
     * @param  \App\Person  $person
     * @return mixed
     */
    public function update(User $user, Person $person)
    {
        $permission = sprintf("%s people", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can delete the person.
     *
     * @param  \App\User  $user
     * @param  \App\Person  $person
     * @return mixed
     */
    public function delete(User $user, Person $person)
    {
        $permission = sprintf("%s people", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can restore the person.
     *
     * @param  \App\User  $user
     * @param  \App\Person  $person
     * @return mixed
     */
    public function restore(User $user, Person $person)
    {
        $permission = sprintf("%s people", __FUNCTION__);

        return has_permission($user, $permission);
    }

    /**
     * Determine whether the user can permanently delete the person.
     *
     * @param  \App\User  $user
     * @param  \App\Person  $person
     * @return mixed
     */
    public function forceDelete(User $user, Person $person)
    {
        $permission = sprintf("%s people", __FUNCTION__);

        return has_permission($user, $permission);
    }
}
