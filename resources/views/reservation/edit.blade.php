@extends('layouts.app')
@section("content")
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
 @endsection