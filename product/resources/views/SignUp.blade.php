@extends('layouts.Master')
@section('MainSection')
<style type="text/css">
    *, *:before, *:after {
  box-sizing: border-box;
}
.g-sign-in-button {
  margin: 10px;
  display: inline-block;
  width: 240px;
  height: 50px;
  background-color: #4285f4;
  color: #fff;
  border-radius: 1px;
  box-shadow: 0 2px 4px 0 rgba(0,0,0,.25);
  transition: background-color .218s, border-color .218s, box-shadow .218s;
}
.g-sign-in-button:hover {
  cursor: pointer;
  -webkit-box-shadow: 0 0 3px 3px rgba(66,133,244,.3);
  box-shadow: 0 0 3px 3px rgba(66,133,244,.3);
}
.g-sign-in-button:active {
  background-color: #3367D6;
  transition: background-color 0.2s;
}
.g-sign-in-button .content-wrapper {
  height: 100%;
  width: 100%;
  border: 1px solid transparent;
}
.g-sign-in-button img {
    width: 18px;
    height: 18px;
}
.g-sign-in-button .logo-wrapper {
   padding: 12px;
   background:#fff;
   width: 48px;
    margin-left: -7px;
    margin-top: -0.5px;
   height: 100%;
   border-radius: 1px; 
   display: inline-block;
}
.g-sign-in-button .text-container {
    font-family: Roboto,arial,sans-serif;
    font-weight: 500;
    letter-spacing: .21px;
    font-size: 16px;
    line-height: 48px;
    vertical-align: top;
    border: none;
    display: inline-block;
    text-align: center;
    width: 180px;
}

</style>
       <main class="signup">
            <div class="container">
                <section class="text-block mb-90">
                    <h4 class="text-center">Get started for Free</h4>
                    <p class="text-center border-decor bd-center" style="padding-bottom: 20px;"></p>
                </section>
               
                <section class="login-form text-center">
                    <form action="{{route('Register')}}" method="post" class="mb-10" id="form_submit">
                      {{csrf_field()}}

                        <div class="row" style="margin-top: -100px; margin-bottom: 20px;">
                            <div class="col-md-1 col-sm-1"></div>
                            <div class="col-md-5 col-sm-5">
                                <a href="{{url('redirect')}}">
                                <div class='g-sign-in-button'>
                                  <div class=content-wrapper>
                                  <div class='logo-wrapper'>  
                                    <img src='https://developers.google.com/identity/images/g-logo.png'>
                                    </div>  
                                    <span class='text-container'> 
                                      <span>Sign Up with Google</span>
                                    </span>
                                  </div>
                                </div>  </a>                         
                                 </div>
                            <div class="col-md-5 col-sm-5"><a href="{{url('fbredirect')}}">
                                <div class='g-sign-in-button' style="background: #3B5894;">
                                  <div class=content-wrapper>
                                  <div class='logo-wrapper'>  
                                    <img src="{{url('/')}}/public/assets/images/facebook.png">
                                    </div>  
                                    <span class='text-container'> 
                                      <span>Sign Up with Facebook</span>
                                    </span>
                                  </div>  
                                </div></a>
                            </div>
                            <div class="col-md-1 col-sm-1"></div>

                        </div>
                        <p>OR</p>
                        <div class="row">
                           <p style="color:red; text-align: left; margin-left: 30px;">
                             @if(session()->has('error'))
                              {{session()->get('error')}}
                             @endif
                           </p>
                           <p id="message" style="text-align: left; margin-left: 30px;">
                             
                           </p>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>
                                <p id="name_e"></p>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="ipt-btn-block">
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Re type Password" required>
                                    <a href="#" class="btn btn-small" id="submit_f">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <a href="#" class="font-16 weight-lighter color-theme-hover">By signing up you agree to out <span class="color-dark">Terms of Service.</span></a>
                </section>
            </div>
        </main>
@endsection
@section('Javascript')
<script  src="{{url('/')}}/public/assets/js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#submit_f").click(function(){
      if($("#name").val()=='' && $("#email").val()=='' && $("#password").val()=='' && $("#confirm_password").val()==''){
        $("#name").html("Please Fill This Field").css('border','1px solid red');
        $("#email").html("Please Fill This Field").css('border','1px solid red');
        $("#password").html("Please Fill This Field").css('border','1px solid red');
        $("#confirm_password").html("Please Fill This Field").css('border','1px solid red');
      }

     

      else{
        $("#name").html("Please Fill This Field").css('border','1px solid green');
        $("#email").html("Please Fill This Field").css('border','1px solid green');
        $("#password").html("Please Fill This Field").css('border','1px solid green');
        $("#confirm_password").html("Please Fill This Field").css('border','1px solid green');
        $("#form_submit").submit();
      }
       
    });
      
      
  });
</script>
@endsection