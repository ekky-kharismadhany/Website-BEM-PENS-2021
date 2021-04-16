<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KalenderController extends Controller
{
    //
    public function getEvent()
    {
        $event = DB::table('kalenders')->select(array('title', 'start', 'end'))->get();
        $event = json_encode($event);
        return view('kalender', [
            'event' => $event
        ]);
    }

    public function setEvent(Request $request)
    {
    }
}
