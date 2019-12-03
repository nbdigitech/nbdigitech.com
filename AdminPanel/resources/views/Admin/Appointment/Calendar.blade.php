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
                      <a href="{{route('Admin/Appointments')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; color:#665C7C;">Manage</a>
                    </h4>
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
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" /> -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


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




<!--##### EMAIL SENDING POPUP MODEL STARTS  #####-->
<div class="modal" id="SndMail">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header"  style="background-color: #665C7C; color:white;">
          <h4 class="modal-title" style="margin-top: -10px; margin-bottom: 10px;">Are You Sure Send Email To Him/Her ?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          {{-- If you are delete it. you can't get it after --}}
          <div class="container">
                <form action="{{route('Admin/Appointments/Email')}}" method="post">
                  {{csrf_field()}}
                    <input type="hidden" name="User_id" id="User_id" />
                    <label class="">Name:</label>

                        <div class="form-group">
                           <input type="text" class="form-control" id="Name_id" name="Name">
                        </div>


                    <label class="">Email:</label>
                    <div class="form-group">
                       <input type="text" class="form-control" id="Email_id" name="Email">
                    </div>

                    <label class="">Mobile:</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Mobile_id" name="Phone">
                    </div>

                    <div class="row">

                      <div class="col-sm-6">
                        <label>Date :</label>
                        <div class="form-group">
                          <input type="text" id="date_id" required name="Date" value="" class="form-control datepicker">
                        </div>
                      </div>

                      <div class="col-sm-6">
                            <label>Time :</label>
                            <div class="form-group">
                              <input type="text" id="time_id" required name="Time" value="" class="form-control timepicker">
                            </div>
                          </div>
                    </div>



                    <label class="">Description:</label>

                        <div class="form-group">
                            <textarea class="form-control" rows="10" name="Description"></textarea>
                        </div>




                    <div class="form-group">
                        <input type="submit" class="btn btn-success" style="color:white; margin-right: 50px;" value="Confirm">
                    </div>


                </form>
            </div>
        </div>

        <!-- Modal footer   col-form-label -->
        <div style="padding-bottom: 50px;">
          <div class="col-sm-2"></div>
        </div>

      </div>
    </div>
  </div>
<!--##### EMAIL SENDING POPUP MODEL ENDS  #####-->



<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style="background-color: #665C7C; color:white;">
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
          <form action="{{route('Admin/Appointments/Delete')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" id="delete_id" name="Delete">

          <button type="submit" class="btn btn-success" style="color:white; margin-right: 50px; width: 100%;">Yes</button>
          </form>
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="color:white; width: 100%; background-color: #665C7C;">No</button>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')



<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc"></script>

  <script type="text/javascript">
  tinymce.init({
  selector: 'textarea',
  height: 60,
  theme: 'modern',



  autoresize_bottom_margin: 0,
  image_advtab: true,
  image_caption: true,
  image_list: [
    {title: 'Dog', value: 'mydog.jpg'},
    {title: 'Cat', value: 'mycat.gif'}
  ],
  font_formats: 'Aileron=aileron, sans-serif;Helvetica=helvetica, arial;Lato=lato, sans-serif;Lobster=lobster, chicago, serif;Noto Serif=noto serif, serif;Permanent Marker=permanent marker, sans-serif;Raleway=raleway, sans-serif;Roboto=roboto, sans-serif;Source Code Pro=source code pro, monospace',
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_style: 'body {margin:25px}',
  content_css: [
    'https://fonts.googleapis.com/css?family=Lato|Lobster|Noto+Serif|Permanent+Marker|Raleway|Roboto|Source+Code+Pro',
    '//www.tiny.cloud/css/codepen.min.css'
  ]
 });

</script>





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






