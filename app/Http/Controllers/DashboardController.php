<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Customer;
use App\Models\Ticket;

class DashboardController extends Controller
{

   public function __construct()
    {
        $this->middleware('role:superadministor');

    }

    public function index(){

    	$events = Event::all()->toArray();

    	$total_events = Event::count();
    	$total_customers = Customer::count();
    	$total_tickets = Ticket::count();
      return view('dashboard',[
      	'total_events'=>$total_events, 
      	'total_customers'=>$total_customers,
      	'total_tickets'=>$total_tickets,
      	'events' => $events
      ]);
    }

}
