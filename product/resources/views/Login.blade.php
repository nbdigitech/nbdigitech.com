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
                    <h4 class="text-center">Login to your <span class="color-theme">eiefy</span> account</h4>
                    <p class="text-center border-decor bd-center" style="padding-top: 20px;"><!-- Use code <span>BLACKFRIDAY16</span> on your next purchase to save 20%. --></p>
                </section>
             
                <section class="login-form text-center">
                  
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
                                      <span>Sign in with Google</span>
                                    </span>
                                  </div>
                                </div> </a>                           </div>
                            <div class="col-md-5 col-sm-5">
                              <a href="{{url('fbredirect')}}">
                                <div class='g-sign-in-button' style="background: #3B5894;">
                                  <div class=content-wrapper>
                                  <div class='logo-wrapper'>  
                                    <img src="{{url('/')}}/public/assets/images/facebook.png">
                                    </div>  
                                    <span class='text-container'> 
                                      <span>Sign in with Facebook</span>
                                    </span>
                                  </div>  
                                </div></a>
                            </div>
                            <div class="col-md-1 col-sm-1"></div>

                        </div>
                      
        
                </section>
            </div>
        </main>
@endsection

@section('Javascript')
<script  src="{{url('/')}}/public/assets/js/jquery.js"></script>
<script  src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
@endsection