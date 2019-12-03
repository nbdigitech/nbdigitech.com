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
                    <h4>Manage Appointments
                      <a href="{{route('Admin/Appointments')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; color:#665C7C;">Manage</a></h4>
                  </div>

                </div>
                <div class="card-body">

              @if(session()->has('success'))
              <div class="alert alert-success">

                   {{ session()->get('success') }}
                  <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              </div>
              @endif




                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}


<script src="{{url('/')}}/public/assets/js/core/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" />
                        {{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> --}}


                                        {!! $calendar->calendar() !!}
                                        {!! $calendar->script() !!}
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
    function email_function(User_id,Name_id,Email_id,Mobile_id,date_id,time_id){
      document.getElementById("User_id").value = User_id;
      document.getElementById("Name_id").value = Name_id;
      document.getElementById("Email_id").value = Email_id;
      document.getElementById("Mobile_id").value = Mobile_id;
      document.getElementById("date_id").value = date_id;
      document.getElementById("time_id").value = time_id;
    }
</script>

<script type="text/javascript">
    function sms_function(Sms_Name_id,Mobile_id){
      document.getElementById("Sms_Name_id").value = Sms_Name_id;
      document.getElementById("Mobile_id").value = Mobile_id;
    }
</script>

<script type="text/javascript">
    function delete_function(id){
      document.getElementById("delete_id").value = id;
    }
  </script>


@endsection






