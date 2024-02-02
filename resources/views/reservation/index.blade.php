@extends('layouts.app')
@section("content")
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if(session('deleted'))
                    <div class="alert alert-danger">{{session('deleted')}}</div>
                     @endif
                    <div class="card-header">
                    <h4>Reservations</h4>
                    
                  
                    </div>
                    <div class="card-links">
                        <a href="{{url('/books')}}"style="text-decoration:none" >Books</a>
                        @if(auth()->user()->role_id == 1)
                        <a href="{{url('/reservations')}}" style="text-decoration:none">Reservations</a>
                        @endif
                        @if(auth()->user()->role_id == 2)
                        <a href="{{url('/reservations/user')}}" style="text-decoration:none">Reservations</a>
                        @endif
                       
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                   <th>id</th>
                                   <th>description</th>
                                   <th>reservation_date</th> 
                                   <th>return_date</th>
                                   @if(auth()->user()->role_id == 1)
                                   <th>user_id</th>
                                   <th>user</th>
                                   <th>book_id</th>
                                   @endif
                                   <th>book title</th>
                                   <th>Action</th>
                                  
                                </tr>
                            </thead>
                           
                            <tbody>
                            @foreach($reservations as $reservation) 
                                <tr>
                                    <td>{{$reservation->id}}</td>
                                    <td>{{$reservation->description}}</td>
                                    <td>{{$reservation->reservation_date}}</td>
                                    <td>{{$reservation->return_date}}</td>
                                    @if(auth()->user()->role_id == 1)
                                    <td>{{$reservation->user_id}}</td>
                                    <td>{{$reservation->user}}</td>
                                    <td>{{$reservation->book_id}}</td>
                                    @endif
                                    <td>{{$reservation->book}}</td>
                                    <td>
                                      
                                      <a href="{{url('reservations/' . $reservation->id . '/delete')}}" class="btn btn-danger">Delete</a> 
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection