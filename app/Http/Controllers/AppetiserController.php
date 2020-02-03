<?php

namespace App\Http\Controllers;

use App\Models\AppetiserModel;
use Illuminate\Http\Request;

class AppetiserController extends Controller
{
    public function _saveEvent(Request $request) {
        AppetiserModel::insertEvents($request->event_date, $request->event);
        return back()->with('status', 'Survey successfully saved!');
    }
}
