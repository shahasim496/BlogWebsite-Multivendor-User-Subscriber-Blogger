@extends('layouts.base')


@section('content')
    

<h1 style="text-align: center"> Bloggers of ZoysBlog </h1>

    <div class="panel-body">
                
        
        
        @if(count($bloggers) > 0)
        <table class="table table-bordered" >
            <tr >
                <th>Name</th>
                <th>View Details</th>
                
            </tr>
            @foreach($bloggers as $blogger)
                <tr>
                    <td>{{$blogger->name}}</td>
                    
                    <td> 
                        <a href="/newblog/bloggers/{{$blogger->id}}" class="btn btn-success">View</a>
                    </td>
                    
                   
                </tr>
            @endforeach
        </table>
    @else
        <p>You have no posts</p>
    @endif
  
    <a href="/newblog" class="btn btn-primary">Go Back </a>
    </div>
    
@endsection