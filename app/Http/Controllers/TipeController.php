<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TipeController extends Controller
{
    public function index()
    {
        return view('tipe', [
            'tipes' => Tipe::all(),
        ]);
    }
}
