<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;

class CommonController extends Controller
{
    public function index()
    {
        Redis::set('common', 'common value');

        dump(Redis::get('common'));

        dd('Common controller');
    }
}
