@extends('layouts.base')

@section('content')
<div class="panel-body">
                

<div class="form-group" style="text-align: center">
<h1> {{$blogger->name}}</h1>
</div>
<div class="form-group">
<p> {{$blogger->aboutus}}

</p>
<a style="margin-right: 100%;" href="/newblog/follow/{{$blogger->id}}" class="btn btn-danger">Follow</a>
</div>
    <a href="/newblog/mybloggers" class="btn btn-primary">Go Back </a>

</div>
@endsection