<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlSaya extends Controller
{
    public function index() {
        // - Mengarahkan menuju view beranda.blade.php
        return view('beranda');
    }
}
