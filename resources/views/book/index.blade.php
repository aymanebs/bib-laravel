@extends('layouts.app')
@section("content")
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                 @endif
                 @if(session('deleted'))
                 <div class="alert alert-danger">{{session('deleted')}}</div>
                 @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Books</h4>
                        @if(auth()->user()->role_id == 1)
                        <a href="{{url('books/create')}}" class="btn btn-primary float-end">Add book</a>
                        @endif
                    </div>
                    <div class="card-links">
                        <a href="{{url('/books')}}" style="text-decoration:none">Books</a>
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
                                    <th>Id</th>
                                    <th>title</th>
                                    <th>author</th>
                                    <th>genre</th>
                                    <th>description</th>
                                    <th>edition</th>
                                    <th>total_copies</th>
                                    <th>avaible_copies</th>
                                    @if(auth()->user()->role_id == 1)
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    @endif
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->genre}}</td>
                                    <td>{{$book->description}}</td>
                                    <td>{{$book->edition}}</td>
                                    <td>{{$book->total_copies}}</td>
                                    <td>{{$book->avaible_copies}}</td>
                                    @if(auth()->user()->role_id == 1)
                                    <td>{{$book->created_at}}</td>
                                    <td>{{$book->updated_at}}</td>
                                    @endif
                                    <td>
                                        @if(Auth()->user()->role_id == 1)
                                        <a href="{{url('books/' . $book->id . '/edit')}}" class="btn btn-warning">Edit</a>
                                        <a href="{{url('books/' . $book->id . '/delete')}}" class="btn btn-danger">Delete</a>
                                        @endif
                                        @if(Auth()->user()->role_id == 1)
                                        <a href="{{url('reservations/' . $book->id . '/create')}}" class="btn btn-info">Reservation</a>
                                        @endif
                                        @if(Auth()->user()->role_id == 2)
                                        <a href="{{url('reservations/' . $book->id . '/create')}}" class="btn btn-info">Reservation</a>
                                        @endif
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-7FTIQoSc7K9qgz4+U8QT1TLgFZMK3I+Yvb4T6zgTv+7K49t3AcXtPDLkD5FwyoTs" crossorigin="anonymous"></script>   
    @endsection