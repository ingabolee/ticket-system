<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class CustomerController extends Controller
{
     public function __construct()
    {
        $this->middleware('role:user');
    }

    public function home(){
      return view('welcome');
    }

    public function index(){
     

      $events = Event::all()->toArray();


      return view('customer', ['events' => $events]);
    }
    
   
}