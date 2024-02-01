<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add reservation</title>
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h4>Add reservation</h4>
                      <a href="{{url('/reservations')}}" class="float-end">back</a>  
                    </div>
                    <div class="card-body">

                    <!-- form start -->
                    <form action="{{url('reservations/create')}}" method='post'>
                     <div class="form-control mb-3">
                        <label>description</label>
                        <input type="text" name="description" >
                     </div>  
                     <div class="form-control mb-3">
                        <label>reservation date</label>
                        <input type="text" name="reservation_date" >
                     </div> 
                     <div class="form-control mb-3">
                        <label>return date</label>
                        <input type="text" name="return_date" >
                     </div>
                     </form>

                     <!-- form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>