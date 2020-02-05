<?php

namespace App\Http\Controllers\LaravelRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;

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

        return response()->json();
    }

    public function psrTest(ServerRequestInterface $request)
    {
//        var_dump($request);
        return response()->json([]);
    }

    public function session(Request $request)
    {
        $id = $request->old('id');
        var_dump($id);
        $request->flash();
//        $request->flashOnly(['id']);
//        $request->flashExcept('name');

        return response()->json([]);
    }

    public function cookie(Request $request)
    {
        $cookies = $request->cookies;
        var_dump($cookies);

        return response()->json([]);
    }
}
