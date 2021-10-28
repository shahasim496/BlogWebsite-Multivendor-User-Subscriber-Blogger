@extends('layouts.data')

@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">

                    
                    <button type="button" style="text-align: center;" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Add New User
                      </button>
              
                      
                      
                      {{-- IMPORT DATA USING EXCEL --}}
                      <div class="container mt-2 text-center">
                        
                        <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                                <div class="custom-file text-left">
                                    <input type="file" name="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <button class="btn btn-primary">Import data</button>
                            <a class="btn btn-success" href="{{ route('export_data') }}">Export data</a>
                        </form>
                        
                    </div>


                    <div class="panel-body">
                         
                        <table class="table" id="datatable">
                            <thead>
                                
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th width="150" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- add user modal --}}
          <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form id="add-post-form">
              
              <input type="text" id="name" class="form-control" placeholder="Name" required>
              <br>
                <input id="email" type="email" class="form-control" placeholder="Email" required>


              </div>
          </form>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-success" id="submit-btn" >Submit</button>  
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

    <!-- Delete user Modal -->
<div class="modal" id="DeleteUserModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"> Delete User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <h4>Are you sure want to delete this User?</h4>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="SubmitDeleteUserForm">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>



@endsection


@section('javascripts')
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('get-user-data') }}",
                "columns": [
                    { "data": "id" },
                    { "data": "name" },
                    { "data": "email",orderable:false },
                    {data: 'Actions', name: 'Actions',orderable:false,serachable:false,sClass:'text-center'},
                ]
            });


//add user ajax request
$('#submit-btn').on('click',function(){
        var name = $('#name').val();
        var email = $('#email').val();
       
        $.ajax({
        method: "GET",
        url: "{{url('Register-user')}}",
        data: { _token: "{{@csrf_token()}}", name: name, email: email},
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
                url: "deleteuser/"+id,
                method: 'DELETE',
                success: (result) => {
            if(result['success'] == true)
            {
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
        });
    </script>
@endsection
