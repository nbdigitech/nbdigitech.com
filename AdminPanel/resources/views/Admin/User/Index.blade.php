@extends('Admin.layouts.Master')

@section('css')
<style type="text/css">
  #Category-error{
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
              <div class="card">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #665C7C; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>Manage Users
                      <a href="{{route('Admin/Users/Add')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; box-shadow: none; color:#665C7C; box-shadow: none;">Add New</a></h4>
                  </div>
                  
                </div>
                <div class="card-body">

              @if(session()->has('success'))
              <div class="alert alert-success">
                  {{session()->get('success')}}
                  <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              </div>
              @endif
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-no-bordered" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th style="font-weight: bold;">#</th>
                          <th style="font-weight: bold;">Name</th>
                          <th style="font-weight: bold;">Email</th>
                          <th style="font-weight: bold;">Mobile</th>
                          <th style="font-weight: bold;">Role</th>
                          <th style="font-weight: bold;" class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th style="font-weight: bold;">#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Role</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                  @php $i = 1; @endphp
                  @foreach($users as $row)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->email}}</td>
                          <td>{{$row->mobile}}</td>
                          <td>{{$row->role}}</td>
                          
                          <form action="{{route('Admin/Users/EditSession')}}" method="post">
                              {{csrf_field()}}
                          <td class="td-actions text-right">
                              <input type="hidden" name="Edit" value="{{$row->id}}">
                            <button type="submit" rel="tooltip" class="btn btn-success" style="background-color: #665C7C; padding:10px; padding-left: 20px; margin-right: 10px; padding-right: 20px;">
                              Edit
                            </button>
                            </form>
                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#myModal" class="btn btn-danger pull-right" onclick="delete_function('{{$row->id}}')" style="background-color: #665C7C; padding:10px; padding-left: 15px; padding-right: 15px;" @if($row->id==1) disabled @endif>
                              Delete
                            </button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
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
          <form action="{{route('Admin/Users/Delete')}}" method="post">
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
   <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>


<script type="text/javascript">
  function delete_function(id){
    document.getElementById("delete_id").value = id;
  }
</script>
@endsection