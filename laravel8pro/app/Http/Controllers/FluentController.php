<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>hello php</h1>';
        $slice = Str::of('Welcome to mu YouTube Channel')->after('Welcome to');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2.'<br>';
    }
}
