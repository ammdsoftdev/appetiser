<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function samplepage() {
        return view ('sample', ['data' => 1]);
    }
    public function samplepage2(Request $request) {
             return view ('layouts.app', [
                'data' => $request->id,
                'name' => $request->name]);
    }
    public function showAppAdmin() {
        return view('layouts.app-admin');
    }

}
