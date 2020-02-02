<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function _testApiCall(Request $request) {
        $response['status'] = 1;
        $response['response'] = "Successfully api call.";
        return response()->json($response);
    }
    public function _miko(Request $request) {
    return view('modules/miko-test/miko-tmpl', ['title' => 'Test App', 'name' => 'miko']);

    }
    public function _single(Request $request) {
        //return view('modules/miko-test/miko-tmpl', ['title' => 'Test App', 'name' => 'miko']);
    }
}
