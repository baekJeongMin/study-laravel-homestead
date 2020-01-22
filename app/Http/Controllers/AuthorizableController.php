<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Access\Authorizable;

class AuthorizableController
{
    public function can(Authorizable $auth)
    {
        $auth->can('call can test');
    }
}