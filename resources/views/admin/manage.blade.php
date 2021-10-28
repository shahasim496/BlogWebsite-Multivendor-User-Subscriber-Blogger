@extends('layouts.base')

 @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                
                    <h3 style="text-align:center;">My categories</h3>
                    
                    @if(count($categories) > 0)
                    <table class="table table-bordered" >
                        <tr >
                           
                            <th>Name</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                
                                <td>{{$category->CategoryName}}</td>

                                <td>{{$category->created_at}}</td>
                              
                                <td>
                                    {!!Form::open(['action' => ['App\Http\Controllers\CategoryController@destroy',$category->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                                
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>You have no Categories</p>
                @endif
              
                <a href="{{url()->previous()}}" class="btn btn-primary">Go Back </a>
                </div>
            </div>
        </div>
    </div>

    @endsection
