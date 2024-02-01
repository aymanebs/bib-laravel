<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Reservations</title>
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if(session('deleted'))
                    <div class="alert alert-danger">{{session('deleted')}}</div>
                     @endif
                    <div class="card-header">
                    <h4>Reservations</h4>
                   
                    <p>id:{{ auth()->id()}}</p>
                  
                    </div>
                    <div class="card-links">
                        <a href="{{url('/books')}}"style="text-decoration:none" >Books</a>
                        <a href="{{url('/reservations')}}"style="text-decoration:none">Reservations</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                   <th>id</th>
                                   <th>description</th>
                                   <th>reservation_date</th> 
                                   <th>return_date</th>
                                   <th>user_id</th>
                                   <th>book_id</th>
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
                                    <td>{{$reservation->user_id}}</td>
                                    <td>{{$reservation->book_id}}</td>
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
    </body>
</html>