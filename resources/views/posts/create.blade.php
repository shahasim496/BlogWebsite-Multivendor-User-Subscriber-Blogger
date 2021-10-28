@extends('layouts.base')

@section('content')



@if(Auth::user()->utype==='blg')
<h1 style="text-align: center;"> Create  post </h1>
{{-- 
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method'=> 'POST','enctype' => 'multipart/form-data','id']) !!}
<div class="form-group">
   {{form ::label('title','Title')}}
   {{Form::text('title','',['class'=>'form-control', 'placeholder'=> 'Title'])}}
</div>

<div class="form-group">
    {{form ::label('body','Body')}}
    {{Form::textarea('body','',['id'=> 'article-ckeditor','class'=>' ckeditor  form-control', 'placeholder'=> 'Body Text'])}}
 </div>
 
 <div class="form-group">
    <label >Sub Category of :</label>
    <select name="category_id">
        <option value="">Categories :</option>
  
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->CategoryName}}</option>
        {{-- <option value="{{$category->id}}"> okkk</option> --}}
{{-- 
        @endforeach
    </select>
    
</div> --}}

    
{{-- {{form ::submit('submit',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!} --}}

<div class="modal-body">
    <form id="add-post-form">
        
        <input type="text" id="post-title" class="form-control" placeholder="Title" required>
        <br>
        <textarea id="post-detail" class="form-control" rows="7"  placeholder="DEtail"></textarea>

        <label >Add Category:</label>
        <select id="post-category" name="">
            <option value="">Categories :</option>
     
            @foreach ($categories as $category)
            <option  value="{{$category->id}}">{{$category->CategoryName}}</option>
             @endforeach
        </select>
        
    </form>

    <div class="footer">
        <button type="button" class="btn btn-success" id="submit-btn" >Submit</button>  
        <a href="/newblog" class="btn btn-danger">Close </a>
    </div>


@endif

@if(Auth::user()->utype==='adm')


<p style="text-align: center;">You are not allowed to access this page </p>
<a href="/newblog" class="btn btn-primary">Go Back </a>

@endif

<script>

    $('#submit-btn').on('click',function(){
      var title = $('#post-title').val();
      var description = $('#post-detail').val();
      var category = $('#post-category').val();
      $.ajax({
      method: "POST",
      url: "{{url('save-post')}}",
      data: { _token: "{{@csrf_token()}}", title: title, description: description,category: category },
      success: (result) => {
          if(result['success'] == true)
          {
            alert(result['msg']);
            
            window.location.href = "{{url('/posts')}}";
          }
          else
          {
            alert("Something went Wrong");  
          }
      },
      error: (error) => {
          alert(error['responseJSON']['message']);
      }
  });
    });
</script>

    
@endsection