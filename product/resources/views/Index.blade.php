@extends('layouts.Master')
@section('MainSection')
      <main class="home pricing">
            <div class="container">
                <section class="text-block mb-70">
                    <h4 class="text-center">Our most selective digital products available for your next project.</h4>
                    <p class="text-center">We are a small team of 3 people making themes and doing custom design work. If you can’t find what you looking for in our store section feel free to contact us with a custom job request.</p>
                </section>
                <a href="{{route('SubCategory')}}" class="btn btn-large btn-center mb-60">View our entire store collection <i class="arrow-right"></i></a>
                <ul class="list-inline list-menu navigation-isotope">
                    <li class="button" data-filter=".wordpress"><a href="{{route('DemoPage')}}">Landing Page</a>
                     
                    </li>
                    <li class="button" data-filter=".site-template"><a href="{{route('DemoPage')}}">Graphics Design</a></li>
                    <li class="button" data-filter=".psd-template"><a href="{{route('DemoPage')}}">Video Animation</a></li>
                    <li class="button" data-filter=".icons"><a href="{{route('DemoPage')}}">Other</a></li>
                    <li class="button" data-filter=".mockup"><a href="{{route('DemoPage')}}">Mockup</a></li>
                </ul>
                <section class="preview row isotope">
                    <div class="col-md-4 col-sm-6 col-xs-6 block wordpress icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/circle.png" alt="">
                            <span class="name">Circle</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block site-template mockup">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Bloggr.png" alt="">
                            <span class="name">Bloggr</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block wordpress psd-template">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Forum.png" alt="">
                            <span class="name">Forum</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block wordpress site-template mockup">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Funding.png" alt="">
                            <span class="name">Funding</span>
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 block wordpress site-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Cubetto.png" alt="">
                            <span class="name">Cubetto</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block psd-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Geo-Shop.png" alt="">
                            <span class="name">Geo Shop</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block mockup site-template">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/iPictures.png" alt="">
                            <span class="name">iPictures</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block psd-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/News_Central.png" alt="">
                            <span class="name">News Central</span>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6 block psd-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Sharehub.png" alt="">
                            <span class="name">Sharehub</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block wordpress psd-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Shopilicious.png" alt="">
                            <span class="name">Shopilicious</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block psd-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Shoppr.png" alt="">
                            <span class="name">Shoppr</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block wordpress psd-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Square.png" alt="">
                            <span class="name">Square</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block psd-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Uri.png" alt="">
                            <span class="name">Uri</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block wordpress psd-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/West_Side.png" alt="">
                            <span class="name">West Side</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block psd-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/WooCommerce.png" alt="">
                            <span class="name">WooCommerce</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 block wordpress psd-template icons">
                        <a href="{{route('DemoPage')}}"><img src="{{url('/')}}/public/assets/images/Youtuber.png" alt="">
                            <span class="name">Youtuber</span>
                        </a>
                    </div>
                </section>
                <section class="text-block mb-60">
                    <h4 class="text-center">We’re available for freelance works</h4>
                    <p class="text-center">Want to make something custom? Why not check the services we provide.</p>
                </section>
              <section class="row mb-30">
                    <div class="col-md-4 col-sm-4">
                        <div class="price-block border-decor-parent mb-30">
                            <h6>Single License</h6>
                            <p>1 theme with 12 months access to updates & support.</p>
                            <span class="price">$59</span>
                            <p class="border-decor bd-center">One-off payment</p>
                            <ul>
                                <li>One theme License</li>
                                <li>12 months access</li>
                                <li>6 months Support</li>
                                <li>15% off future purchases</li>
                            </ul>
                            <a href="{{route('DemoPage')}}" class="btn btn-small">Purchase</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="price-block border-decor-parent mb-30">
                            <h6>6 Months Membership</h6>
                            <p>1 theme with 12 months access to updates & support.</p>
                            <span class="price">$150</span>
                            <p class="border-decor bd-center">One-off payment</p>
                            <ul>
                                <li>6 theme License</li>
                                <li>12 months access</li>
                                <li>6 months Support</li>
                                <li>20% off future purchases</li>
                            </ul>
                            <a href="{{route('DemoPage')}}" class="btn btn-small">Sing up</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="price-block border-decor-parent mb-30">
                            <h6>Lifetime Membership</h6>
                            <p>All themes with unlimited access to updates & support.</p>
                            <span class="price">$20</span>
                            <p class="border-decor bd-center">Billed monthly</p>
                            <ul>
                                <li>All theme License</li>
                                <li>Forever access</li>
                                <li>Unlimited support</li>
                                <li>Free Purchases</li>
                            </ul>
                            <a href="{{route('DemoPage')}}" class="btn btn-small">Sing up</a>
                        </div>
                    </div>
                </section>

                <a href="{{route('DemoPage')}}" class="btn btn-large btn-center mb-70">Submit a proposal <i class="arrow-right"></i></a>
                <section class="row mb-40">
                    <div class="col-md-4">
                        <a href="{{route('DemoPage')}}" class="comment">
                            <div class="image">
                                <img src="{{url('/')}}/public/assets/images/eiefy_0041_User_1.png" alt="">
                            </div>
                            <p>The customer support was incredible.</br>It was very prompt and helpful replies.</p>
                            <div class="caption">
                                <p>Stan Marsh</p>
                                <p>CEO, horizon.com</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <a href="$" class="info">
                            <img src="{{url('/')}}/public/assets/images/eiefy_0038_BG_Image.png" alt="">
                            <div class="text">
                                <h4 class="border-decor">We transform great ideas into amazing digital products for your business.</h4>
                                <p>We hope this guide has been helpful. It's all about balance and being aware of the different types of visitors to your site. </p>
                            </div>
                        </a>
                    </div>
                </section>
                <section class="row mb-40">
                    <div class="col-md-8">
                        <div class="block-icon">
                            <img src="{{url('/')}}/public/assets/images/support.svg" alt="">
                            <div class="text-block">
                                <h4 class="text-center border-decor">We offer fast & top-notch customer support.</h4>
                                <p class="text-center">Our solution experts are here to answer your questions, help you troubleshoot issues, improve your experience & increase satisfaction with our solutions.</p>
                            </div>
                            <a href="{{route('DemoPage')}}" class="btn btn-small btn-center">Support Centre</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="download">
                            <div class="text-block">
                                <h4 class="border-decor">Grab this month’s free item.</h4>
                                <p>Download this month’s free item. Get it while you can!</p>
                            </div>
                            <img src="{{url('/')}}/public/assets/images/eiefy_0037_Free_Item.png" alt="">
                            <a href="{{route('DemoPage')}}" class="btn btn-small btn-dark">Download</a>
                        </div>
                    </div>
                </section>
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