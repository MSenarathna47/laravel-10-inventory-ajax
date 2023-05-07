@extends('Admin.main_master')
@section('admin')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
     <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                   <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> User Table</h5>
                        <div class="table-responsive">
                            <div class="m-3 text-right "> 
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add New User</button>                            
                            </div>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Nic</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Nic</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>          
        </div>    
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
   @include('Admin.body.footer')
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->


    <!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
                <div class="row">
                    <div class="col-md 6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">User Name:</label>
                            <input type="text" class=" form-control" name="username" id="username">
                          </div>
                    </div>
                    <div class="col-md 6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="email" name="email" id="email" class=" form-control" >
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md 6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                          </div>
                    </div>
                    <div class="col-md 6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md 6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Gender:</label>
                            <select class="select2 form-control custom-select select2-hidden-accessible" name="gender" id="gender" aria-label="Default select example">
                                <option selected="" disabled="" value="">Select Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md 6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Address:</label>
                            <textarea class="form-control" id="address" name="address"></textarea>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md 6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Position:</label>
                            <select class="select2 form-control custom-select select2-hidden-accessible" name="position" id="position" aria-label="Default select example">
                                <option selected="" disabled="" value="">Select Position</option>
                                <option value="1">Admin</option>
                                <option value="2">Manager</option>
                                <option value="3">cashier</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md 6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Password:</label>
                            <input type="tepasswordxt" class="form-control" id="password" name="password">

                    </div>
                </div>


                
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary adduser">Save</button>
          </div>
    </div>
  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $(document).on('click','.adduser', function (e) {
            e.preventDefault();
            var data = {
                'username' : $("#username").val(),
                'email' : $("#email").val(),
                'name' : $("#name").val(),
                'phone' : $("#phone").val(),
                'gender' : $("#gender").val(),
                'address' : $("#address").val(),
                'position' : $("#position").val(),
                'password' : $("#password").val(),

            }
            console.log(data);
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            // $.ajax({
            //     type: "post",
            //     url: "/user/store",
            //     data: data,
            //     dataType: "json",
            //     success: function (response) {
            //         console.log(response);
            //     }
            // });
        });
    });
</script>
@endsection







