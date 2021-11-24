@extends('layouts.back.master')
@section('content')

<div class="content">
@if(session('delete'))
      <h2 class="alert alert-success" >{{session('delete')}}</h2>
      @endif


      <h1>Display Photo</h1>

      <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th style="width: 40px">Name</th>
                      <th style="width: 40px">Price</th>
                      <th style="width: 40px">Size</th>
                      <th style="width: 60px">Photo</th>
                      <th style="width: 60px">update</th>
                      <th style="width: 60px">Delete</th>

                    </tr>
                    @foreach($opration as $opration)

                  </thead>
                  <tbody>
                    <tr>
                    
                      <td> {{$opration['id']}} </td>
                      <td> {{$opration['name']}} </td>
                   
                      <td> {{$opration['price']}} </td>
                      <td> {{$opration['size']}} </td>
                    <td><img width="60px" hight="40px" src="{{asset('uploads/photo/'.$opration->photo )}}" alt="{{$opration->photo }}"> </td>

<td> <a  class="btn btn-primary" href=update/{{$opration->id}} >Update</a> </td>
<td> <a  class="btn btn-danger" href=delete/{{$opration->id}} >Delete</a> </td>


                    </tr>
                    @endforeach

                   
               
                </table>
              
    @endsection