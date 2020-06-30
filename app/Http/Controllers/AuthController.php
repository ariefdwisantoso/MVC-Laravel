<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function proses(Request $request){
        $this->validate($request, ["namaDepan" => "required", 
                                   "namaBelakang" => "required"]);
        $namaDepan    = $request->input('namaDepan');
        $namaBelakang = $request->input('namaBelakang');
        return view('/welcome', compact('namaDepan', 'namaBelakang'));
    }
}
