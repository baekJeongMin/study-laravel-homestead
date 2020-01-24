<?php

namespace App\Http\Controllers\LaravelRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function get(Request $request)
    {
        $uri = $request->path();
        var_dump($uri);

        if ($request->is('request/test')) {
            var_dump('request test');
        }
        if ($request->is('request/*')) {
            var_dump('request *');
        }
        if ($request->is('*/test')) {
            var_dump('* request');
        }
        if ($request->is('*/*')) {
            var_dump('* *');
        }

        // Without Query String...
        $url = $request->url();
        var_dump($url);

        // With Query String...
        $url = $request->fullUrl();
        var_dump($url);

        $method = $request->method();
        var_dump($method);
    }
}
