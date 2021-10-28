@extends('layouts.base')

@section('content')

<h1 style="text-align: center;"> Edit  post </h1>

    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method'=> 'PUT']) !!}
<div class="form-group">
   {{form ::label('title','Title')}}
   {{Form::text('title',$post->title,['class'=>'form-control', 'placeholder'=> 'Title'])}}
</div>

<div class="form-group">
    {{form ::label('body','Body')}}
    {{Form::textarea('body',$post->body,['id'=> 'article-ckeditor','class'=>' ckeditor  form-control', 'placeholder'=> 'Body Text'])}}
 </div>

 <div class="form-group">
    {{Form::file('cover_img')}}
</div>
    
    
{{form ::submit('submit',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}


   
@endsection