@extends('layouts.base')

 @section('content')

 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                
                    <h3 style="text-align:center;">Manage Bloggers </h3>
                    
                    @if(count($bloggers) > 0)
                    <table class="table table-bordered" >
                        <tr >
                           
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach($bloggers as $bloggers)
                            <tr>
                                
                                <td>{{$bloggers->name}}</td>
                              
                                <td>
                                    <form action="/newblog/delblogger/{{$bloggers->id}}", method="get", enctype="multipart/form-data">
                                        <button class="btn btn-danger">Delete </button>
                                        </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>No blogger Found</p>
                @endif
              
                <a href="{{url()->previous()}}" class="btn btn-primary">Go Back </a>
                </div>
            </div>
        </div>
    </div>

    @endsection
