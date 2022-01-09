<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function home(){
      return view('welcome');
    }

    public function index(){
      $bookings = Booking::all();
      return view('bookings.index', ['bookings' => $bookings]);
    }
    public function create(){
      return view('bookings.create');
    }
    public function store(){
      $booking = new Booking();
      $booking ->booking_id = request('booking_id');
      $booking ->booking_date = request('booking_date');
      $booking ->booking_customer_id = request('booking_customer_id');
      $booking ->booking_event_id = request('booking_event_id');

      $booking ->save();
      return redirect('/') ->with('mssg', 'Booking successful');
    }
    public function show($id){
      $booking = Booking::findOrFail($id);
      return view('bookings.show', ['booking' => $booking]);
    }
    public function destroy($id){
      $booking = Booking::findOrFail($id);
      $booking->delete();
      return redirect('/bookings');
    }
}