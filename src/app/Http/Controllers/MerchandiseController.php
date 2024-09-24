<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function create() {
        return view('sell');
    }
}
