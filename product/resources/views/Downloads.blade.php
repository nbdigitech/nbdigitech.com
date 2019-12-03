@extends('layouts.Master')
@section('MainSection')
     <!-- MAIN -->
        <main class="downloads">
            <div class="container">
                <section class="text-block border-decor bd-130 bd-center mb-70">
                    <h4 class="text-center">Downloads</h4>
                </section>
                <ul class="list-inline list-menu navigation-isotope mb-30">
                    <li class="button" data-filter="*"><a href="#">All themes</a></li>
                    <li class="button" data-filter=".blog"><a href="#">Blog</a></li>
                    <li class="button" data-filter=".photography"><a href="#">Photography</a></li>
                    <li class="button" data-filter=".business"><a href="#">Business</a></li>
                    <li class="button" data-filter=".portfolio"><a href="#">Portfolio</a></li>
                    <li class="button" data-filter=".magazine"><a href="#">Magazine</a></li>
                    <li class="button" data-filter=".others"><a href="#">Others</a></li>
                </ul>
                <div class="border-block"></div>
                <section class="product-list row isotope mb-70">
                    <div class="block portfolio business">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <a href="#"><img src="{{url('/')}}/public/assets/images/Bloggr.png" alt=""></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="features-info">
                                    <h6 class="border-decor">Bloggr</h6>
                                    <table class="table">
                                        <tr>
                                            <td>Support</td>
                                            <td>12 Months</td>
                                        </tr>
                                        <tr>
                                            <td>License</td>
                                            <td>Regular</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-5 col-xs-6 col-md-offset-1 text-center">
                                <a href="#" class="btn btn-small btn-gray btn-service">Order Custom Service</a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-0 col-sm-offset-1 col-xs-offset-2 pull-right text-center">
                                <a href="#" class="btn btn-small btn-gray btn-download">Download</a>
                                <span class="stars">
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block photography others">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <a href="#"><img src="{{url('/')}}/public/assets/images/Circle.png" alt=""></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="features-info">
                                    <h6 class="border-decor">Circle</h6>
                                    <table class="table">
                                        <tr>
                                            <td>Support</td>
                                            <td>8 Months</td>
                                        </tr>
                                        <tr>
                                            <td>License</td>
                                            <td>Regular</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-5 col-xs-6 col-md-offset-1 text-center">
                                <a href="#" class="btn btn-small btn-gray btn-service">Order Custom Service</a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-0 col-sm-offset-1 col-xs-offset-2 pull-right text-center">
                                <a href="#" class="btn btn-small btn-gray btn-download">Download</a>
                                <span class="stars">
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block blog magazine">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <a href="#"><img src="{{url('/')}}/public/assets/images/Forum.png" alt=""></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="features-info">
                                    <h6 class="border-decor">Forum</h6>
                                    <table class="table">
                                        <tr>
                                            <td>Support</td>
                                            <td>8 Months</td>
                                        </tr>
                                        <tr>
                                            <td>License</td>
                                            <td>Regular</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-5 col-xs-6 col-md-offset-1 text-center">
                                <a href="#" class="btn btn-small btn-gray btn-service">Order Custom Service</a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-0 col-sm-offset-1 col-xs-offset-2 pull-right text-center">
                                <a href="#" class="btn btn-small btn-gray btn-download">Download</a>
                                <span class="stars">
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block blog portfolio">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <a href="#"><img src="{{url('/')}}/public/assets/images/Funding.png" alt=""></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="features-info">
                                    <h6 class="border-decor">Funding</h6>
                                    <table class="table">
                                        <tr>
                                            <td>Support</td>
                                            <td>8 Months</td>
                                        </tr>
                                        <tr>
                                            <td>License</td>
                                            <td>Regular</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-5 col-xs-6 col-md-offset-1 text-center">
                                <a href="#" class="btn btn-small btn-gray btn-service">Order Custom Service</a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-0 col-sm-offset-1 col-xs-offset-2 pull-right text-center">
                                <a href="#" class="btn btn-small btn-gray btn-download">Download</a>
                                <span class="stars">
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block photography magazine">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <a href="#"><img src="{{url('/')}}/public/assets/images/Geo_Shop.png" alt=""></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="features-info">
                                    <h6 class="border-decor">Geo Shop</h6>
                                    <table class="table">
                                        <tr>
                                            <td>Support</td>
                                            <td>8 Months</td>
                                        </tr>
                                        <tr>
                                            <td>License</td>
                                            <td>Regular</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-5 col-xs-6 col-md-offset-1 text-center">
                                <a href="#" class="btn btn-small btn-gray btn-service">Order Custom Service</a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-0 col-sm-offset-1 col-xs-offset-2 pull-right text-center">
                                <a href="#" class="btn btn-small btn-gray btn-download">Download</a>
                                <span class="stars">
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block portfolio others">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <a href="#"><img src="{{url('/')}}/public/assets/images/Shoppr.png" alt=""></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="features-info">
                                    <h6 class="border-decor">Shoppr</h6>
                                    <table class="table">
                                        <tr>
                                            <td>Support</td>
                                            <td>8 Months</td>
                                        </tr>
                                        <tr>
                                            <td>License</td>
                                            <td>Regular</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-5 col-xs-6 col-md-offset-1 text-center">
                                <a href="#" class="btn btn-small btn-gray btn-service">Order Custom Service</a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-0 col-sm-offset-1 col-xs-offset-2 pull-right text-center">
                                <a href="#" class="btn btn-small btn-gray btn-download">Download</a>
                                <span class="stars">
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block blog magazine">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <a href="#"><img src="{{url('/')}}/public/assets/images/WooCommerce.png" alt=""></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="features-info">
                                    <h6 class="border-decor">WooCommerce</h6>
                                    <table class="table">
                                        <tr>
                                            <td>Support</td>
                                            <td>8 Months</td>
                                        </tr>
                                        <tr>
                                            <td>License</td>
                                            <td>Regular</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-5 col-xs-6 col-md-offset-1 text-center">
                                <a href="#" class="btn btn-small btn-gray btn-service">Order Custom Service</a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-0 col-sm-offset-1 col-xs-offset-2 pull-right text-center">
                                <a href="#" class="btn btn-small btn-gray btn-download">Download</a>
                                <span class="stars">
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block photography business">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <a href="#"><img src="{{url('/')}}/public/assets/images/Youtuber.png" alt=""></a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="features-info">
                                    <h6 class="border-decor">Youtuber</h6>
                                    <table class="table">
                                        <tr>
                                            <td>Support</td>
                                            <td>8 Months</td>
                                        </tr>
                                        <tr>
                                            <td>License</td>
                                            <td>Regular</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-5 col-xs-6 col-md-offset-1 text-center">
                                <a href="#" class="btn btn-small btn-gray btn-service">Order Custom Service</a>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-0 col-sm-offset-1 col-xs-offset-2 pull-right text-center">
                                <a href="#" class="btn btn-small btn-gray btn-download">Download</a>
                                <span class="stars">
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star active" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
                <a href="#" class="btn btn-small btn-gray mb-70 btn-next">Next</a>
                <section class="row mb-40">
                    <div class="col-md-6">
                        <div class="block-icon">
                            <img src="fonts/eiefy_icons/support.svg" alt="">
                            <div class="text-block">
                                <h4 class="text-center border-decor">Customer support.</h4>
                                <p class="text-center">Our solution experts are here to answer your questions, help you troubleshoot issues, & increase satisfaction with our solutions.</p>
                            </div>
                            <a href="#" class="btn btn-small btn-center">Support Centre</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block-icon">
                            <img src="fonts/eiefy_icons/wordpress.svg" alt="">
                            <div class="text-block">
                                <h4 class="text-center border-decor">Want custom WordPress Theme?</h4>
                                <p class="text-center">Let’s face it: a theme’s price tag matters a lot. Custom designs, which in the WordPress world are usually custom themes.</p>
                            </div>
                            <a href="#" class="btn btn-small btn-center">Order Service</a>
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