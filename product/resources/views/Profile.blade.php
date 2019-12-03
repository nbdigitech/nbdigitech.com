@extends('layouts.Master')
@section('MainSection')
     <main class="contact-support">
            <div class="container">
                <section class="text-block mb-70">
                    <h4 class="text-center">Send us a support request</h4>
                    <p class="text-center">Please describe more about your project here. Feel free to message us if you want more things done for the app outside what we offer.</p>
                </section>
                <section class="form-section mb-70">
                    @if(session()->has('success'))
                    <div class="alert alert-success" style="background: #00F395; color:white;">
                        {{session()->get('success')}}
                        <a href="#" class="close" data-dismiss="alert">x</a>
                        }
                    </div>
                    @endif
                    <form action="{{route('UpdateProfile')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your name</label>
                                <input type="text" name="name" id="" class="form-control" value="{{$user->name}}" placeholder="Add here" required>
                            </div>
                            <div class="col-md-12">
                                <label>Your email</label>
                                <input type="email" name="email" id="" value="{{$user->email}}" class="form-control" placeholder="Add here" disabled>
                            </div>
                            <div class="col-md-12">
                               <label>Your mobile</label>
                                <input type="text" value="{{$user->Mobile}}" maxlength="10" minlength="10" name="Mobile" id="" class="form-control" placeholder="Add here" required>
                            </div>
                            <div class="col-md-12">
                                <label>Enter Your Bio*</label>
                                <textarea name="Description" id="" class="form-control" placeholder="Add here" required>{{$user->Description}}</textarea>
                            </div>
                            <!-- <div class="col-md-12">
                                <label>Upload additional files</label>
                                <div class="btn-group btn-group-lg btn-group-upload">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <input type="button" class="btn btn-primary" value="File1">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="button" class="btn btn-primary" value="File2">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="button" class="btn btn-primary" value="File3">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    
                </section>
               <!--  <p class="text-center mb-40">You will hear from us within 1-2 business days.</p> -->
                <button type="submit" class="btn btn-center btn-large mb-70">Update Profile</a>
            </div>
            </form>
        </main>

@endsection
@section('Javascript')
<script  src="{{url('/')}}/public/assets/js/jquery.js"></script>
<script  src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
@endsection