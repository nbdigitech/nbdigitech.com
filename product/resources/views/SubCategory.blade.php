@extends('layouts.Master')
@section('MainSection')
       <main class="browse">
            <div class="container">
                <section class="text-block border-decor bd-130 bd-center">
                    <h4 class="text-center">Landing Pages In Bootstrap </h4>
                    <p class="text-center">Highly customizable and responsive WordPress themes yo build your portfolio, blog or site. They're perfect for photographers, designers, agencies, and businesses.</p>
                </section>
                <ul class="list-inline list-menu navigation-isotope">
                    <li class="button" data-filter="*"><a href="{{route('DemoPage')}}">All themes</a></li>
                    <li class="button" data-filter=".blog"><a href="{{route('DemoPage')}}">Education</a></li>
                    <li class="button" data-filter=".photography"><a href="{{route('DemoPage')}}">Real Estate</a></li>
                    <li class="button" data-filter=".business"><a href="{{route('DemoPage')}}">Business</a></li>
                    <li class="button" data-filter=".portfolio"><a href="{{route('DemoPage')}}">Finance</a></li>
                    <li class="button" data-filter=".magazine"><a href="{{route('DemoPage')}}">Magazine</a></li>
                    <li class="button" data-filter=".others"><a href="{{route('DemoPage')}}">Others</a></li>
                </ul>
                <section class="preview row isotope">
                    <div class="col-md-4 col-sm-6 col-xs-6 block blog business">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Bloggr.png" alt="">
                            <span class="name">Bloggr</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block business magazine">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/circle.png" alt="">
                            <span class="name">Circle</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block blog portfolio others">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Forum.png" alt="">
                            <span class="name">Forum</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block photography magazine">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Funding.png" alt="">
                            <span class="name">Funding</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block business portfolio">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Geo-Shop.png" alt="">
                            <span class="name">Geo Shop</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block blog photography others">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/iPictures.png" alt="">
                            <span class="name">iPictures</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block photography magazine">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/News_Central.png" alt="">
                            <span class="name">News Central</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block business portfolio">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Sharehub.png" alt="">
                            <span class="name">Sharehub</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block blog portfolio others">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Shopilicious.png" alt="">
                            <span class="name">Shopilicious</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block photography magazine">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Shoppr.png" alt="">
                            <span class="name">Shoppr</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block blog business others">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Square.png" alt="">
                            <span class="name">Square</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block photography magazine">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Uri.png" alt="">
                            <span class="name">Uri</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block blog photography others">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/West_Side.png" alt="">
                            <span class="name">West Side</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block blog photography others">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/WooCommerce.png" alt="">
                            <span class="name">WooCommerce</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block blog photography others">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Youtuber.png" alt="">
                            <span class="name">Youtuber</span>
                        </a>
                    </div>
                </section>
                <a href="{{route('DemoPage')}}" class="btn btn-small btn-gray btn-center btn-next">Next</a>
              
            </div>
        </main>
@endsection

@section('Javascript')
<script  src="{{url('/')}}/public/assets/js/jquery.js"></script>
<script  src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
<script  src="{{url('/')}}/public/assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script  src="{{url('/')}}/public/assets/js/isotope.packery.js" type="text/javascript"></script>
<script  src="{{url('/')}}/public/assets/js/app.js"></script>
@endsection