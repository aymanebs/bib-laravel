@extends('layouts.app')
@section("content")
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

            
                <div class="card">
                    <div class="card-header">
                        <h4>Edit book</h4>
                        <a href="{{url('books')}}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <!-- form start -->

                        

                      <form action="{{url('books/'. $book->id .'/update')}}" method='POST'>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                        <label for="">title</label>
                        <input type="text" class="form-control" name="title" value="{{$book->title}}">
                        @error('title') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                        <label for="">author</label>
                        <input type="text" class="form-control" name="author" value="{{$book->author}}">
                        @error('author') <span class="text-danger">{{$message}}</span> @enderror

                        </div>
                        <div class="mb-3">
                        <label for="">genre</label>
                        <input type="text" class="form-control" name="genre" value="{{$book->genre}}">
                        @error('genre') <span class="text-danger">{{$message}}</span> @endif
                        </div>
                        <div class="mb-3">
                            <label for="">description</label>
                            <textarea type="text" name="description" class="form-control" rows="3" >{{$book->description}}</textarea>
                            @error('description') <span class="text-danger">{{$message}}</span> @endif
                        </div>
                        <div class="mb-3">
                            <label for="">edition</label>
                            <input type="text" class="form-control" name="edition" value="{{$book->edition}}">
                            @error('edition') <span class="text-danger">{{$message}}</span> @endif
                        </div>
                        <div class="mb-3">
                            <label for="">total_copies</label>
                            <input type="text" class="form-control" name="total_copies" value="{{$book->total_copies}}">
                            @error('total_copies') <span class="text-danger">{{$message}}</span> @endif
                        </div>
                        <div class="mb-3">
                            <label for="">avaible_copies</label>
                            <input type="text" class="form-control" name="avaible_copies" value="{{$book->avaible_copies}}">
                            @error('avaible_copies') <span class="text-danger">{{$message}}</span> @endif
                        </div>
                        
                        <button type="submit" class="btn btn-success">Edit</button>
                     
                    </form>
                      <!-- form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection