<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {
        $anggotas = Anggota::all();
        return view('layouts.app', compact('anggotas'));
    }
}
