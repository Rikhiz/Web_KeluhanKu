<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return Inertia::render('Siswa/Dashboard', [
            // Anda dapat mengirimkan data tambahan di sini
            'exampleData' => 'Ini adalah data contoh',
        ]);
    }
}
