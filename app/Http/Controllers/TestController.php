<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $nama = 'Test 123';
        $pelajaran = ['Pelajaran 1', 'Pelajaran 2'];
        return view('home1', ['nama' => $nama, 'pelajaran' => $pelajaran]);
    }
}
