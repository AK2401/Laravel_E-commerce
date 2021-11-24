@extends('layouts.back.master')
@section('content')

<div class="content">
@if(session('msg'))
      <h2 class="alert alert-success" >{{session('msg')}}</h2>
      @endif

      <h1>Edit Photo Details</h1>

      <form action="/update" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                      <input type="hidden" name="id" value="{{$opration->id}}">
                    <label for="exampleInputEmail1">Enter Photo Name</label>
                    <input type="text" value="{{$opration->name}}" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Photo Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Eneter Photo Price</label>
                    <input type="text" value="{{$opration->price}}" class="form-control" name="price" id="exampleInputPassword1" placeholder="Enter  Photo price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Eneter Photo Size</label>
                    <input type="text" value="{{$opration->size}}" class="form-control" name="size" id="exampleInputPassword1" placeholder="Enter Photo size">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" value="{{$opration->photo }}" class="custom-file-input" name="photo" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    </div>
                  </div>
                 
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
</div>
</div>
</div>

              
    @endsection