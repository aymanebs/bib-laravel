<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::select('reservations.*', 'users.name as user', 'books.title as book')->join('users', 'users.id', '=', 'reservations.user_id')->join('books', 'books.id', '=', 'reservations.book_id')->get();
        return view('reservation.index', compact('reservations'));
    }

    public function indexForUser()
    {


        $reservations = Reservation::select('reservations.*', 'users.name as user', 'books.title as book')->join('users', 'users.id', '=', 'reservations.user_id')->join('books', 'books.id', '=', 'reservations.book_id')->where('user_id', Auth::id())->get();
        return view('reservation.index', compact('reservations'));
    }

    public function create($bookId)
    {
        $book = Book::findOrFail($bookId);
        return view('reservation.create', compact('book'));
    }

    public function store(ReservationRequest $request)
    {

        Reservation::create(array_merge($request->all(), ['user_id' => Auth::id()]));
        $book = Book::findOrFail($request->book_id);
        $book->decrement('avaible_copies');
        return redirect()->route('book.index')->with('success','Book reserved');
    }

    public function destroy(Reservation $reservation)
    {

        $reservation->delete();
        if(auth()->user()->role_id == 1){
            return redirect()->route('reservation.index')->with('deleted', 'reservation deleted succesfully');
        }
        if(auth()->user()->role_id == 2){
            return redirect()->route('reservation.user.index')->with('deleted', 'reservation deleted succesfully');
        }
        
    }
}
