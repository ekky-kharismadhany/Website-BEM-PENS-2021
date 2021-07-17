<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalenderRequest;
use App\Models\Kalender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KalenderController extends Controller
{
    //
    protected $folder = 'calendar.';

    public function index()
    {
        $event = Kalender::all();
        return view($this->folder.'calendar', ['events' => $event]);
    }
    public function getEvent()
    {
        $event = DB::table('kalenders')->select(array('title', 'start', 'end'))->get();
        $event = json_encode($event);
        return view('kalender', [
            'event' => $event
        ]);
    }

    public function add()
    {
        return view($this->folder.'addCalendar');
    }

    public function edit($id) {
        $event = Kalender::find($id);
        return view($this->folder.'editCalender', ['event' => $event]);
    }

    public function store(CalenderRequest $request)
    {
        $startDate = date_create($request->start);
        $startDate = date_format($startDate, 'Y-m-d');
        $endDate = date_create($request->end);
        $endDate = date_format($endDate, 'Y-m-d');
        $event = Kalender::create([
            'title' => $request->title,
            'Deskripsi' => $request->description,
            'start' => $startDate,
            'end' => $endDate,
            'url' => $request->url
        ]);
        return redirect()->route('calendar')->with('message', 'Event Uploaded');
    }

    public function update(CalenderRequest $request) {
        $startDate = date_create($request->start);
        $startDate = date_format($startDate, 'Y-m-d');
        $endDate = date_create($request->end);
        $event = Kalender::find($request->id);
        $event->title = $request->title;
        $event->Deskripsi = $request->description;
        $event->start = $startDate;
        $event->end = $endDate;
        $event->url = $request->url;
        $event->save();
        return redirect()->route('calendar')->with('message', 'Event Updated');
    }
    public function destroy(Request $request) {
        $event = Kalender::find($request->id);
        $event->delete();
        return redirect()->route('calendar')->with('message', 'Event Deleted');
    }
}
