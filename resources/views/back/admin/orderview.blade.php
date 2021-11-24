@extends('layouts.back.master')
@section('content')

<div class="content">
@if(session('delete'))
      <h2 class="alert alert-success" >{{session('delete')}}</h2>
      @endif


      <h1>Display User Order And Address</h1>

      <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th style="width: 40px">Customer Name</th>
                      <th style="width: 40px">Customer Address</th>
                      <th style="width: 40px">Customer Mobaile</th>

                      <th style="width: 40px">Product Name</th>
                      <th style="width: 40px">Product Price</th>
                      <th style="width: 40px">Product Size</th>
                      <th style="width: 60px">Product Photo</th>
                      <th style="width: 60px">Delete</th>

                    </tr>
                        @foreach($oder as $oder)

                  </thead>
                  <tbody>
                    <tr>
                  
                      <td> {{$oder->id}} </td>
                      <td> {{$oder->fullname}} </td>
                      <td> {{$oder->fulladd}} </td>
                      <td> {{$oder->mob}} </td>


                      <td> {{$oder->name}} </td>
                      <td> {{$oder->price}} </td>
                      <td> {{$oder->size}} </td>
                    <td><img width="60px" hight="40px" src="{{asset('uploads/photo/'.$oder->photo )}}" alt="{{$oder->photo }}"> </td>

               <td> <a  class="btn btn-danger" href=admin/oder/delete/{{$oder->id}} >Delete</a> </td> 


                    </tr>
                    @endforeach

                   
               
                </table>
              
    @endsection