<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class AddEventController extends Controller
{
    public function index()
    {
        return view('addEvent');
    }

    public function create(Request $request)
    {
        $item = new Event();
        $item->title = $request->title;
        $item->start = $request->start;
        $item->end = $request->end;
        $item->description = $request->description;
        $item->color = $request->color;
        $item->save();

        return redirect('/dashboard');
    }


    public function getEvents()
    {
        $Events = Event::all();
        return response()->json($Events);
    }

    public function deleteEvent($id)
    {
        $Event = Event::findOrFail($id);
        $Event->delete();

        return response()->json(['message' => 'Event deleted successfully']);
    }

    public function update(Request $request, $id)
    {
       
        $Event = Event::findOrFail($id);

        $Event->update([
            'start' => Carbon::parse($request->input('start_date'))->setTimezone('UTC'),
            'end' => Carbon::parse($request->input('end_date'))->setTimezone('UTC'),
        ]);

        return response()->json(['message' => 'Event moved successfully']);
    }

    public function resize(Request $request, $id)
    {
        $Event = Event::findOrFail($id); 

        $newEndDate = Carbon::parse($request->input('end_date'))->setTimezone('UTC');
        $Event->update(['end' => $newEndDate]);

        return response()->json(['message' => 'Event resized successfully.']);
    }

    public function search(Request $request)
    {
        $searchKeywords = $request->input('title');

        $matchingEvents = Event::where('title', 'like', '%' . $searchKeywords . '%')->get();

        return response()->json($matchingEvents);
    }
}
