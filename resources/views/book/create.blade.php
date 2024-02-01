<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add book</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Add book</h4>
                        <a href="{{url('books')}}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <!-- form start -->
                      <form action="{{url('books/create')}}" method='post'>
                        @csrf
                        <div class="mb-3">
                        <label for="">title</label>
                        <input type="text" class="form-control" name="title">
                        @error('title') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                        <label for="">author</label>
                        <input type="text" class="form-control" name="author" >
                        @error('author') <span class="text-danger">{{$message}}</span> @enderror

                        </div>
                        <div class="mb-3">
                        <label for="">genre</label>
                        <input type="text" class="form-control" name="genre" >
                        @error('genre') <span class="text-danger">{{$message}}</span> @endif
                        </div>
                        <div class="mb-3">
                            <label for="">description</label>
                            <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                            @error('description') <span class="text-danger">{{$message}}</span> @endif
                        </div>
                        <div class="mb-3">
                            <label for="">edition</label>
                            <input type="text" class="form-control" name="edition">
                            @error('edition') <span class="text-danger">{{$message}}</span> @endif
                        </div>
                        <div class="mb-3">
                            <label for="">total_copies</label>
                            <input type="text" class="form-control" name="total_copies" >
                            @error('total_copies') <span class="text-danger">{{$message}}</span> @endif
                        </div>
                        <div class="mb-3">
                            <label for="">avaible_copies</label>
                            <input type="text" class="form-control" name="avaible_copies" >
                            @error('avaible_copies') <span class="text-danger">{{$message}}</span> @endif
                        </div>
                        
                        <button type="submit" class="btn btn-success">Submit</button>
                     
                    </form>
                      <!-- form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>