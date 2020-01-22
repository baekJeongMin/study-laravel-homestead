<?php

namespace Tests\Http\Controllers;

use App\Http\Controllers\AuthorizableController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\PassportController;
use Tests\TestCase;

class AuthorizableControllerTest extends TestCase
{
    public function testUseCache()
    {
        $auth = new AuthorizableController();

        $cache = new CacheController();
        $auth->can($cache);

        echo "\n";

        $cache = new PassportController();
        $auth->can($cache);
    }
}
