@extends('layouts.base')

 @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                
                    <h3 style="text-align:center;">My Blog Posts</h3>
                    <button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Add New
                      </button>
                      {{-- using route method --}}
                      {{-- <div class="col-md-4">
                        <form action="/newblog/search" method="get">
                          <div class="form-group">
                            <input type="search" name="search" class="form-control">
                            <span class="form-group-button">  

                              <button type="submit" class="btn btn-primary">Search</button>

                            </span>
                          </div>

                        </form>
                      </div> --}}


                      {{-- using ajax --}}
                      <div class="col-md-4">
                        <form action="/newblog/search" method="get">
                          <div class="form-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search  Data" />
                            
                          </div>

                        </form>
                      </div>
                      {{-- <h3 >Total Data : <span id="total_records"></span></h3> --}}
                    @if(count($posts) > 0)
                    <table class="table table-bordered" >
                      
                      <thead>
                        <tr >
                            <th>Title</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                      </thead>
                          <tbody>
                        {{-- @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>

                                
                                <td><a href="posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                                <td> 
                                    <a href="/newblog/posts/{{$post->id}}" class="btn btn-success">View</a>

                                </td>
                            </tr>
                        @endforeach --}}



                          </tbody>
                    </table>
                @else
                    <p>You have no posts</p>
                @endif
              
                <a href="{{url()->previous()}}" class="btn btn-primary">Go Back </a>
                </div>
            </div>
    </div>

     <!-- Delete user Modal -->
  <div class="modal" id="DeleteUserModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"> Delete   Post</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <h4>Are you sure want to delete this Post?</h4>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="SubmitDeleteUserForm">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit Article Modal -->
<div class="modal" id="EditArticleModal">
  <div class="modal-dialog">
      <div class="modal-content">
                    <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Article Edit</h4>
                <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
            </div>
          <!-- Modal body -->
            <div class="modal-body">
              <div id="EditArticleModalBody"> </div>
              <label >Add Category:</label>
              <select id="post-category" name="">
                  <option value="">Categories :</option>
           
                  @foreach ($categories as $category)
                  <option  value="{{$category->id}}">{{$category->CategoryName}}</option>
                   @endforeach
              </select>
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                  <strong>Success!</strong>Article was added successfully.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
             
            </div>
          <!-- Modal footer -->
          <div class="modal-footer">
              <button type="button" class="btn btn-success" id="SubmitEditArticleForm">Update</button>
              <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button>
          </div>


      </div>
  </div>
</div>

 



      <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Post</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
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
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-success" id="submit-btn" >Submit</button>  
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>




<script>
               // Delete user Ajax request.
               var deleteID;
        $('body').on('click', '#getDeleteId', function(){
            deleteID = $(this).data('id');
        })
        $('#SubmitDeleteUserForm').click(function() {
          
            var id = deleteID;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "deletepost/"+id,
                method: 'DELETE',
                success: (result) => {
            if(result['success'] == true)
            {
              alert(result['msg']);
              location.reload();
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
  




  {{-- insert post  --}}
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
              
              location.reload();
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

  {{-- edit post --}}
<script>
 

        var i;
        $('body').on('click', '#getEditArticleData', function() {
            
            i = $(this).data('id');
            
            $.ajax({
                url:"editarticle/"+i,
                method: 'GET',
                // data: {
                //     id: id,
                // },
                success: (result) => {
                    
                      // alert(result.html);
                  
                    
                      $('#EditArticleModalBody').html(result.html);
                    
                     $('#EditArticleModal').modal('show');

                     
                }
            });
        });


          // Get single article in EditModel
   $('.modelClose').on('click', function(){
            $('#EditArticleModal').hide();
        });
  </script>

{{-- search by title --}}
<script>
  $(document).ready(function(){
  
   fetch_post_data();
  
   function fetch_post_data(query = '')
   {
    $.ajax({
     url:"{{ route('action') }}",
     method:'GET',
     data:{query:query},
     dataType:'json',
     success:function(data)
     {
      $('tbody').html(data.table_data);
    
     }
    })
   }
  
   $(document).on('keyup', '#search', function(){
    var query = $(this).val();
    fetch_post_data(query);
   });
  });
  </script>


{{-- update data  --}}

<script>

  $('#SubmitEditArticleForm').on('click',function(){
    var title = $('#editTitle').val();
    var body = $('#editbody').val();
    var category = $('#post-category').val();
    $.ajax({
    method: "POST",
    url: "savearticle/"+i,
    data: { _token: "{{@csrf_token()}}", title: title, body: body,category: category },
    success: (result) => {
        if(result['success'] == true)
        {
          alert(result['msg']);
          
          location.reload();
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
