@extends('layouts.base')

 @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                
                    <h3 style="text-align:center;"> Blog Posts</h3>
                    
                    @if(count($posts) > 0)
                    <table class="table table-bordered" >
                        <tr >
                            <th>Title</th>
                            <th>Action </th>
                            
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                
                                
                                <td> 
                                    <a href="/newblog/posts/{{$post->id}}" class="btn btn-success">View</a>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>You have no posts</p>
                @endif
              
                <a href="/newblog" class="btn btn-primary">Go Back </a>
                </div>
            </div>
        </div>
    </div>

    @endsection
