<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function home(){
      return view('welcome');
    }

    public function index(){
      $tickets = Ticket::all();
      return view('tickets.index', ['tickets' => $tickets]);
    }
    public function create(){
      return view('tickets.create');
    }
    public function store(){
      $ticket = new Ticket();
      $ticket ->ticket_details = request('name');
      $ticket ->ticket_quantity = request('type');
      $ticket ->ticket_booking_id = request('base');

      $ticket ->save();
      return redirect('/') ->with('mssg', 'ticket successful');
    }
    public function show($id){
      $ticket = Ticket::findOrFail($id);
      return view('tickets.show', ['ticket' => $ticket]);
    }
    public function destroy($id){
      $ticket = Ticket::findOrFail($id);
      $ticket->delete();
      return redirect('/tickets');
    }
}