<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class GuruBKController extends Controller
{
    public function index()
    {
        return Inertia::render('GuruBK/Dashboard', [
            // Anda dapat mengirimkan data tambahan di sini
            'exampleData' => 'Ini adalah data contoh',
        ]);
    }
}
