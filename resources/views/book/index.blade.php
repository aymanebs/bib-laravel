<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Books</title>
</head>
<body>
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
                        <a href="{{url('books/create')}}" class="btn btn-primary float-end">Add book</a>
                    </div>
                    <div class="card-links">
                        <a href="{{url('/books')}}">Books</a>
                        <a href="{{url('/reservations')}}">Reservations</a>
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
                                    <th>created_at</th>
                                    <th>updated_at</th>
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
                                    <td>{{$book->created_at}}</td>
                                    <td>{{$book->updated_at}}</td>
                                    <td>
                                        <a href="{{url('books/' . $book->id . '/edit')}}" class="btn btn-warning">Edit</a>
                                        <a href="{{url('books/' . $book->id . '/delete')}}" class="btn btn-danger">Delete</a>
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