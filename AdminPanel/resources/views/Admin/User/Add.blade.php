@extends('Admin.layouts.Master')

@section('css')
  <style type="text/css">
    #Role-error{
      margin-top: 40px;
    }

    .tox-notifications-container{
    display: none;
  }
  </style>
@endsection

@section('MainSection')
<div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="@if(isset($edit->id)) {{route('Admin/Users/Update')}} @else {{route('Admin/Users/Store')}} @endif" method="post">
                {{csrf_field()}}
                <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text" style="background-color:#665C7C;">
                    <div class="card-text" style="width: 100%; box-shadow:none">
                      <h4 class="card-title">@if(isset($edit->id)) Update Users @else Create Users @endif</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Name :</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="Name" required="true" value="@if(isset($edit->id)) {{$edit->name}} @endif"/>
                        </div>
                      </div>
                      </div>

                      <div class="row">
                      <label class="col-sm-2 col-form-label">Email :</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="email" required name="Email" required="true" value="@if(isset($edit->id)) {{$edit->email}} @endif"/>
                        </div>
                      </div>
                      </div>


                      <div class="row">
                      <label class="col-sm-2 col-form-label">Mobile :</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" minlength="10" maxlength="10" required name="Mobile" required="true" value="@if(isset($edit->id)) {{$edit->mobile}} @endif"/>
                        </div>
                      </div>
                      </div>

                     @if(!isset($edit->id)) 
                      <div class="row">
                      <label class="col-sm-2 col-form-label">Password :</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" required type="text" name="Password" id="Password" required="true">
                        </div>
                      </div>
                      </div>
                     

                      <div class="row">
                      <label class="col-sm-2 col-form-label">Confirm Password :</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="ConfirmPassword" equalto="#Password" requiredvalue="@if(isset($edit->id)) {{$edit->Name}} @endif"/>
                        </div>
                      </div>
                      </div>
                       @endif

                      <div class="row">
                      <label class="col-sm-2 col-form-label">Role :</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <select class="form-control" required name="Role" required>
                            <option value="">Select User Role</option>
                            <option value="Author" @if(isset($edit->id))  @if($edit->role == 'Author') selected @endif @endif>Author</option>
                            <option value="Operator" @if(isset($edit->id))  @if($edit->role == 'Operator') selected @endif @endif>Operator</option>
                          </select>
                        </div>
                      </div>
                    </div><br>

                      <div class="row">
                      <label class="col-sm-2 col-form-label">Active / InActive :</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <select class="form-control" name="Status" required>
                            <option value="1" @if(isset($edit->id))  @if($edit->Status == '1') selected @endif @endif>Active</option>
                            <option value="0" @if(isset($edit->id))  @if($edit->Status == '0') selected @endif @endif>InActive</option>
                          </select>
                        </div>
                      </div>

                      <div class="card-footer ml-auto mr-auto pull-right">
                    <button type="submit" class="btn btn-rose" style="box-shadow: none;">
                      @if(isset($edit->id)) Update @else Submit @endif
                    </button>
                  </div> 
                      </div>
                </div>
              </form>
            </div>
          </div>

</div>
</div>


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style="background-color: #E73774; color:white;">
        <h4 class="modal-title" style="margin-top: -10px; margin-bottom: 10px;">Are You Sure Delete It ?</h4>
        <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" style="text-align: center; padding-top: 50px;">
        If you are delete it. you can't get it after
      </div>

      <!-- Modal footer -->
      <div class="row" style="padding-bottom: 50px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
          <form action="{{route('Admin/Category/Delete')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" id="delete_id" name="Delete">
            
          <button type="submit" class="btn btn-success" style="color:white; margin-right: 50px; width: 100%;">Yes</button>
          </form>
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="color:white; width: 100%; background-color: #E73774;">No</button>
        </div>
        <div class="col-sm-2"></div>
      </div>
        
        
      

    </div>
  </div>
</div>
@endsection

@section('js')
  <script type="text/javascript" src="{{url('/')}}/public/assets/js/validate.min.js"></script>

  <script>
    function setFormValidation(id) {
      $(id).validate({
        highlight: function(element) {
          $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
          $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function(element) {
          $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
          $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function(error, element) {
          $(element).closest('.form-group').append(error);
        },
      });
    }

    $(document).ready(function() {
      setFormValidation('#RegisterValidation');
      setFormValidation('#TypeValidation');
      setFormValidation('#LoginValidation');
      setFormValidation('#RangeValidation');
    });
  </script>


  <script type="text/javascript">
    function delete_function(id){
    document.getElementById("delete_id").value = id;
  }
  </script>
@endsection