@extends('layouts.Master')
@section('MainSection')
  <main class="single-item">
            <div class="container">
                <section class="text-block mb-70">
                    <h4 class="text-center">Circle Video Sharing Website WordPress Template</h4>
                    <p class="text-center">Inspired by Netflix and YouTube, Circcle is a modern, clean, and edgy design that showcases high quality video sharing. </p>
                </section>
                <section class="btns-group-demo mb-70">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="#" class="btn btn-small btn-gray pull-right">Live Demo</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="#" class="btn btn-small pull-right">Purchase $39</a>
                        </div>
                    </div>
                </section>
            </div>
            <section class="slider mb-60">
                <div>
                    <img src="{{url('/')}}/public/assets/images/Desktop_01.png" alt="">
                </div>
                <div>
                    <img src="{{url('/')}}/public/assets/images/Mobile_01.png" alt="">
                </div>
                <div>
                    <img src="{{url('/')}}/public/assets/images/Desktop_02.png" alt="">
                </div>
                <div>
                    <img src="{{url('/')}}/public/assets/images/Mobile_02.png" alt="">
                </div>
                <div>
                    <img src="{{url('/')}}/public/assets/images/Desktop_03.png" alt="">
                </div>
                <div>
                    <img src="{{url('/')}}/public/assets/images/Mobile_03.png" alt="">
                </div>
            </section>
            
        </main>

@endsection

@section('Javascript')
<script  src="{{url('/')}}/public/assets/js/jquery.js"></script>
<script  src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
<script  src="{{url('/')}}/public/assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script  src="{{url('/')}}/public/assets/js/isotope.packery.js" type="text/javascript"></script>
<script  src="{{url('/')}}/public/assets/js/app.js"></script>
@endsection