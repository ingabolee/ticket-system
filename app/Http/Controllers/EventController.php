<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function home(){
      return view('welcome');
    }

    public function index(){
      $events = Event::all();
      return view('event', ['events' => $events]);
    }
    public function create(){
      return view('event');
    }
    public function store(){
      $event = new Event();
      $event ->event_name = request('event_name');
      $event ->event_time = request('event_time');
      $event ->event_location = request('event_location');
      $event ->event_price = request('event_price');
      $event ->event_event_type_id = request('event_event_type_id');

      $event ->save();
      return redirect('/') ->with('mssg', 'Event successful');
    }
    public function show($id){
      $event = Event::findOrFail($id);
      return view('events.show', ['event' => $event]);
    }
    public function destroy($id){
      $event = Event::findOrFail($id);
      $event->delete();
      return redirect('/events');
    }
}