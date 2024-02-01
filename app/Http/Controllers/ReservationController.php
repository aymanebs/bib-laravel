<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{

    public function index(){
        $reservations=Reservation::get();
        return view('reservation.index',compact('reservations'));
    }

    public function create(){
        $book= Book ::first();
        return view('reservation.create',compact('book'));
    }

    public function store(ReservationRequest $request){
       
        Reservation::create(array_merge($request->all(),['user_id'=>Auth::id()]));
        return redirect()->route('book.index');
    }

    public function destroy(Reservation $reservation){
       
        $reservation->delete();
        return redirect()->route('reservation.index')->with('deleted','reservation deleted succesfully');

    }
}
