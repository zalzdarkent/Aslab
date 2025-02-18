<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $anggotas = Anggota::all();
        return view('pages.home', compact('anggotas'));
    }
}
