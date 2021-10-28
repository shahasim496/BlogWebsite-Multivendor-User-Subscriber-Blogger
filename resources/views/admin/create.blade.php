@extends('layouts.base')
@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">

<h1 style="text-align: center;"> Add Categories  </h1>

    
<form action="/newblog/Categorie", method="POST", enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="Category">Category</label>
        <input type="text" class="form-control" name="CategoryName" id="CategoryName" placeholder="Category">
    </div>
    <div class="form-group">
        <label >Sub Category of :</label>
        <select name="category_id">
            <option value="">No SubCategory</option>
      
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->CategoryName}}</option>
            {{-- <option value="{{$category->id}}"> okkk</option> --}}

            @endforeach
        </select>
        
    </div>
    
    <input type="submit" value="Submit" class="btn btn-primary">
</form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection