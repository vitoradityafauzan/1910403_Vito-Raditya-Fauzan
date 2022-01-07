<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeri;


class beranda extends Controller
{
    public function beranda() {
        echo "<script>alert('Haloo, Guten Abend');</script>";
        return view('asgard');
    }

    public function galeri() {
        $galeri = galeri::all();

         echo "<script>alert('Haloo, Guten Abend');</script>";

        return view('galeri') ->with('galeri', $galeri);
    }
}
