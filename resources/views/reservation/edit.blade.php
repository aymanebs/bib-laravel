<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit reservation</title>
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h4>Edit reservation</h4>
                      <a href="{{url('/reservations')}}" class="float-end btn btn-primary" >back</a>  
                    </div>
                    <div class="card-body">
                   
                    <!-- form start -->
                    <form action="{{url('reservations/create')}}" method='post'>
                    @csrf
                     <div class="form-control mb-3">
                        <input type="hidden" name="book_id" value="{{$book->id}}" >
                        <label>description</label>
                        <input type="text" name="description" >
                        @error('description')<span class="text-danger">{{$message}}</span>@enderror
                     </div>  
                     <div class="form-control mb-3">
                        <label>reservation date</label>
                        <input type="text" name="reservation_date" >
                        @error('reservation_date')<span class="text-danger">{{$message}}</span>@enderror
                     </div> 
                     <div class="form-control mb-3">
                        <label>return date</label>
                        <input type="text" name="return_date" >
                        @error('return_date')<span class="text-danger">{{$message}}</span>@enderror
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