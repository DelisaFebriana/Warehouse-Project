<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HelloController extends BaseController
{
    public function index()
    {
        return view ('index');
    }
}