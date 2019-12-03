@extends('Admin.layouts.Master')

@section('css')
<style type="text/css">
  #Language-error{
    margin-top: 40px;
  }

  #SubCategoryId-error{
    margin-top: 40px;
  }

  #BoardId-error{
    margin-top: 40px;
  }

  #PremOrFreeId-error{
    margin-top: 40px;
  }
</style>
@endsection

@section('MainSection')
<div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="@if(isset($edit->id)) {{route('Admin/About/Update')}} @else {{route('Admin/About/Store')}} @endif" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #5BBC2E; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>
                      @if(isset($edit->id)) Update About @else Create About @endif
                      <a href="{{route('Admin/About')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; color:#5BBC2E;">Manage</a></h4>
                  </div>

                </div>
                  <div class="card-body" >

                   <!--  <div class="row" style="margin-bottom: 30px;">


                      <label class="col-sm-2 col-form-label">Category :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                            <select name="CategoryId" class="form-control cat_sel" id="category_show" required="true" style="padding-left:20px;">
                            <option value="">Select Category</option>

                          </select>
                        </div>
                      </div>

                       <label class="col-sm-2 col-form-label">Sub Category :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <select name="SubCategoryId" class="form-control" required="true" style="padding-left:20px;">
                            <option value="">Select SubCategory</option>

                          </select>
                      </div>
                    </div>
                  </div> -->





                   <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Title :</label>
                      <div class="col-sm-8">
                        <div class="form-group">
                           <input type="text" required name="Title" value="@if(isset($edit->id)) {{$edit->Title}} @endif" class="form-control">
                        </div>
                      </div>
                  </div>

                   <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Sub Title:</label>
                      <div class="col-sm-8">
                        <div class="form-group">
                          <textarea  id="full-featured" class="form-control" rows="10" required="true" name="SubTitle">@if(isset($edit->id)) {{$edit->SubTitle}} @endif</textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row" style="margin-bottom: 30px;">
                      <label class="col-sm-2 col-form-label">Description:</label>
                      <div class="col-sm-8">
                        <div class="form-group">
                          <textarea  id="full-featured" class="form-control" rows="10" required="true" name="Description">@if(isset($edit->id)) {{$edit->Description}} @endif</textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row" style="margin-bottom: 30px;">
                     <label class="col-sm-2 col-form-label">Image:</label>
                      <div class="col-md-4 col-sm-4">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                          <div class="fileinput-new thumbnail"  style="height: 165px;">
                            <img src="@if(isset($edit->id)) https://s3.ap-south-1.amazonaws.com/nbpaperplanes/images/{{$edit->Image}} @else {{url('/')}}/public/backend/img/image_placeholder.jpg @endif" alt="..." height="165px">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail"></div>
                          <div>
                            <span class="btn btn-rose btn-round btn-file">
                              <span class="fileinput-new">Upload Image</span>
                              <span class="fileinput-exists">Change Image</span>
                              <input type="file" name="Image" accept="image/jpeg, image/jpg, image/png, image/gif" @if(!isset($edit->id)) required="true" @endif>
                            </span>
                            <p>Upload Only Image Formate </p>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Video URL :</label>
                      <div class="col-sm-8">
                        <div class="form-group">
                          <input class="form-control" type="url" name="VideoURL" required="true" value="@if(isset($edit->id)) {{$edit->VideoURL}} @endif"/>
                        </div>
                      </div>
                    </div>

                    <div class="card-footer ml-auto mr-auto">
                    <button type="submit" style="width: 100%;" class="btn btn-large btn-rose">
                      @if(isset($edit->id)) Update @else Submit @endif
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
</div>
</div>
@endsection

@section('js')

 


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

<!--
  <script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $(document).ready(function(){
      $(".board_sel").on('change',function(){
        var id = $(this).val();
        $.ajax({
          url:'{{route('show_category')}}',
          data:{board_id:id},
          type:'post',
          success:function(data){
          $("#category_show").empty();
          $("#category_show").append(data);
        },


        }

        );
      });
    });
  </script> -->

<!--
  <script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $(document).ready(function(){
      $(".cat_sel").on('change',function(){
        var id = $(this).val();
        $.ajax({
          url:'{{route('show_sub_category')}}',
          data:{cat_id:id},
          type:'post',
          success:function(data){
            $("#sub_category_show").empty();
          $("#sub_category_show").append(data);
        },


        }

        );
      });
    });
  </script> -->
@endsection
