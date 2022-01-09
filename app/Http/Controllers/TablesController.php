<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class TablesController extends Controller
{
    public function index(){

    	$events = Event::all()->toArray();


      return view('tables', ['events' => $events]);
    }
}
