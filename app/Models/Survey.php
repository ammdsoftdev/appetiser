<?php

namespace App\Models;

use App\Utilities;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model {
    protected $table = 'survey';
    public static function insertSurvey($title, $description) {
        $name = Utilities::getName();
        $questions_list = Questions::getQuestions();

        $survey = new Survey();
        $survey->survey_title = $title;
        $survey->description = $description;
        $survey->save();
        return $survey->id;
    }
}
