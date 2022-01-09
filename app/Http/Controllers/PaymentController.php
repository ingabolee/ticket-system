<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function home(){
      return view('welcome');
    }

    public function index(){
      $payments = Payment::all();
      return view('payments.index', ['payments' => $payments]);
    }
    public function create(){
      return view('payments.create');
    }
    public function store(){
      $payment = new Payment();
      $payment ->payment_date = request('payment_date');
      $payment ->payment_mode = request('payment_mode');
      $payment ->payment_reference = request('payment_reference');
      $payment ->payment_ticket_id = request('payment_ticket_id');

      $payment ->save();
      return redirect('/') ->with('mssg', 'payment successful');
    }
    public function show($id){
      $payment = Payment::findOrFail($id);
      return view('payments.show', ['payment' => $payment]);
    }
    public function destroy($id){
      $payment = Payment::findOrFail($id);
      $payment->delete();
      return redirect('/payments');
    }
}