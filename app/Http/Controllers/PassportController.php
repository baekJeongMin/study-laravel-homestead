<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Access\Authorizable;

class PassportController implements Authorizable
{
    /**
     * Determine if the entity has a given ability.
     *
     * @param string $ability
     * @param array|mixed $arguments
     * @return bool
     */
    public function can($ability, $arguments = [])
    {
        // TODO: Implement can() method.
        echo 'PassportController ability='.$ability;

        return true;
    }
}