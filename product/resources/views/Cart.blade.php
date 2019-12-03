@extends('layouts.Master')
@section('MainSection')
       <main class="cart">
            <div class="container">
                <section class="text-block mb-70 text-center">
                    <h4>Checkout</h4>
                    <p><i class="fa fa-lock" aria-hidden="true"></i>This page uses 256-bit encryption. Your payment data is never stored locally.</p>
                </section>
                <section class="features border-decor-parent mb-60">
                    <i class="btn-close"></i>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-center">
                            <img src="images/eiefy_0056_Product-2.png" alt="">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="features-info">
                                <h6 class="border-decor">Geo Shop - Groceries Shopping Website</h6>
                                <table class="table">
                                    <tr>
                                        <td>Support</td>
                                        <td>12 Months</td>
                                    </tr>
                                    <tr>
                                        <td>Updates</td>
                                        <td>Free Lifetime</td>
                                    </tr>
                                    <tr>
                                        <td>Domain Usage</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr>
                                        <td>Included files</td>
                                        <td>
                                            <div class="tags">
                                                <a href="#">psd</a>
                                                <a href="#">css</a>
                                                <a href="#">php</a>
                                                <a href="#">js</a>
                                                <a href="#">icons</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Refund Policy</td>
                                        <td>30 Days, no-question asked</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <h5>Add additional service</h5>
                <section class="offers row mb-30">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#">
                            <div class="hover">
                                <i class="btn-close"></i>
                            </div>
                            <img src="fonts/eiefy_icons/PSD.svg" alt="">
                            <p>Design Changes</p>
                            <span>$50</span>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#">
                            <div class="hover">
                                <i class="btn-close"></i>
                            </div>
                            <img src="fonts/eiefy_icons/wordpress.svg" alt="">
                            <p>Customization</p>
                            <span>$150</span>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#">
                            <div class="hover">
                                <i class="btn-close"></i>
                            </div>
                            <img src="fonts/eiefy_icons/Email.svg" alt="">
                            <p>Email Newsletter</p>
                            <span>$60</span>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#">
                            <div class="hover">
                                <i class="btn-close"></i>
                            </div>
                            <img src="fonts/eiefy_icons/icon_design.svg" alt="">
                            <p>Change Icons</p>
                            <span>$80</span>
                        </a>
                    </div>
                </section>
                <section class="cart-block row mb-40">
                    <div class="col-md-8">
                        <h5>Add additional service</h5>
                        <div class="payment mb-30">
                            <div class="payment-method">
                                <div class="active"><img src="images/eiefy_0019_Payment_01.png" alt=""></div>
                                <div><img src="images/eiefy_0018_Payment_02.png" alt=""></div>
                                <div><img src="images/eiefy_0017_Payment_03.png" alt=""></div>
                            </div>
                            <div class="payment-info">
                                <label>Name on Card</label>
                                <input type="text" class="form-control">
                                <label>Card Number</label>
                                <input type="text" class="form-control">
                                <div class="row inline-select">
                                    <div class="col-md-7">
                                        <label>Expiry Date</label>
                                        <select name="expiryD" class="form-control">
                                            <option>MM</option>
                                            <option>Option #1</option>
                                            <option>Option #2</option>
                                        </select>
                                        <span>/</span>
                                        <select name="expiryY" class="form-control">
                                            <option>YY</option>
                                            <option>Option #1</option>
                                            <option>Option #2</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <label>CVV</label>
                                        <input type="text" class="form-control" placeholder="Add">
                                    </div>
                                </div>
                                <label class="checkbox-text">
                                    <label class="checkbox-default">
                                        <input type="checkbox">
                                        <span class="arrow"></span>
                                    </label>
                                    <p>Save card for next time</p>
                                </label>
                                <table class="table mt-30">
                                    <tr class="total">
                                        <td>Your Order Total</td>
                                        <td>$101.00</td>
                                    </tr>
                                </table>
                                <a href="#" class="btn btn-small">Make Payment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Order Summary</h5>
                        <table class="table mb-30">
                            <tr>
                                <td>Geo shop - groceries ..</td>
                                <td>$39.00</td>
                            </tr>
                            <tr>
                                <td>Handling Fee:</td>
                                <td>$2.00</td>
                            </tr>
                            <tr>
                                <td>Email Newsletter</td>
                                <td>$60.00</td>
                            </tr>
                            <tr class="total">
                                <td>Total:</td>
                                <td>$101.00</td>
                            </tr>
                        </table>
                    </div>
                </section>
            </div>
        </main>
@endsection

@section('Javascript')
<script  src="{{url('/')}}/public/assets/js/jquery.js"></script>
<script  src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
@endsection