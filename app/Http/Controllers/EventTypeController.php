<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventType;

class EventTypeController extends Controller
{
    public function home(){
      return view('welcome');
    }

    public function index(){
      $eventtypes = EventType::all();
      return view('eventtypes.index', ['eventtypes' => $eventtypes]);
    }
    public function create(){
      return view('eventtype');
    }
    public function store(){
      $eventtype = new EventType();
      $eventtype ->event_type_name = request('event_type_name');
      $eventtype ->event_type_description = request('event_type_description');


      $eventtype ->save();
      return redirect('/') ->with('mssg', 'EventType successful');
    }
    public function show($id){
      $eventtype = EventType::findOrFail($id);
      return view('eventtypes.show', ['eventtype' => $eventtype]);
    }
    public function destroy($id){
      $eventtype = EventType::findOrFail($id);
      $eventtype->delete();
      return redirect('/eventtypes');
    }
}