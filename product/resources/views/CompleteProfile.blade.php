@extends('layouts.Master')
@section('MainSection')
      <main class="contact-support">
            <div class="container">
                <section class="form-section mb-70">
                    <h4 class="text-center">Please Complete Your Profile</h4><br>
                    <form action="{{route('UserUpdate')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your fullname*</label>
                                <input type="text" name="name" id="" value="{{$user->name}}" class="form-control" placeholder="Add here" required>
                            </div>
                            <div class="col-md-12">
                                <label>Your email</label>
                                <input type="email" name="email" value="{{$user->email}}" id="" class="form-control" placeholder="Add here">
                            </div>
                        </div><br><br>
                        <button type="submit" class="btn btn-center btn-info btn-large mb-70">Continue</button>
                    </form>
                </section>
            </div>
        </main>
@endsection
@section('Javascript')
<script  src="{{url('/')}}/public/assets/js/jquery.js"></script>
<script  src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
@endsection