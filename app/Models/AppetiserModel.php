<?php

namespace App\Models;

use App\Utilities;
use Illuminate\Database\Eloquent\Model;

class AppetiserModel extends Model {
    protected $table = 'posts';
    public static function insertEvents($event_date, $event) {

        $appetiser = new AppetiserModel();
        $appetiser->event = $event;
        $appetiser->event_date = $event_date;
        $appetiser->save();
        return $appetiser->id;
    }
}
