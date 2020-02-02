<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Utilities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function _surveyList() {
        //$survey_list = DB::table('survey')->where('id', 1)->get();
        $survey_list = DB::table('survey')->get();

       // $name = Utilities::getName();
        return view ('survey.survey-list', ['survey_list' => $survey_list/*,
                                            'name' => $name*/]);
    }
    public function _saveSurvey(Request $request) {
        Survey::insertSurvey($request->title, $request->description);
        return back()->with('status', 'Survey successfully saved!');
    }
}
