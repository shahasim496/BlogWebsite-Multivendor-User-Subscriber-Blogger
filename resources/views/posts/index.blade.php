@extends('layouts.base')

@section('content')

<h1 style="text-align: center;"> Our posts </h1>

@if (count($posts) > 0)

@foreach ($posts as $post)

<div class="well"> 
    <h2><a href="/newblog/posts/{{$post->id}}">{{$post->title}}</a></h2>
    <p> {!! $post->body !!}</p>
</div>
    
@endforeach
    {{$posts->links()}}
@else
    <p> Data Not Found </p>
@endif
    
@endsection