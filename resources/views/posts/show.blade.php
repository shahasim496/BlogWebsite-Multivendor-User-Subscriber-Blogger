@extends('layouts.base')

@section('content')


<h1 style="text-align: center;"> {{$post->title}} </h1>

<p> {!! $post->body !!}</p>





<h2> Comments : </h2>

{{-- 
displaying commnets  --}}
@foreach ($comment as $comment)

<pre>{{$comment ->id}} :
     {{$comment ->body}}
    
   Posted On : {{$comment ->created_at}}</pre>

@endforeach




{{-- comment area --}}
<form method="POST" action="{{ url('/comment') }}">
    @csrf

<div class="form-group">
    <h4>Comment Here :</h4>
    <input type="hidden" name="id" value="{{$post->id}}"/>
    <textarea class="form-control" name="comment" id="comment" rows="7"></textarea>
  </div>

  <div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-success">
            {{ __('Submit') }}
        </button>
    </div>
</div>
</form>
<a href="{{url()->previous()}}" class="btn btn-primary">Go Back </a>
@endsection



 {{-- @if(Auth::user()->id ==$post->user_id)
// <a href="/newblog/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>



// {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id], 'method'=> 'PUT']) !!}

// {{form::hidden ('_method','Delete')}}

// {{form ::submit('Delete',['class'=> 'btn btn-danger', 'style="margin-left:93%;"'])}}
// {!! Form::close() !!} --}}


