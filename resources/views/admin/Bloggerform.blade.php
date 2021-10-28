@extends('layouts.base')

@section('content')



<h1 style="text-align: center;"> Add Blogger</h1>

<div class="conntainer">
<form >

    {{-- input blogger name --}}
<div class="form-group">
    <label  for="name">Name:</label>
    <input type="text" id="name" class="form-control">
</div>    
    {{-- input bogger email --}}
<div class="form-group">
    <label for="email">Email:</label>
    <input type="Email" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="about">About:</label>
    <textarea class="form-control" name="about" id="about" cols="60" rows="10"></textarea>
  </div>
{{-- Type of the user --}}
  <div class="col-xs-4">
    <label for="utype">User Type:</label>
    <input type="text" value="blg" class="form-control" id="blogger" disabled>
</div>

<input type="submit" name="submit" class="btn btn-primary"> 
</form>



</div>

    
@endsection