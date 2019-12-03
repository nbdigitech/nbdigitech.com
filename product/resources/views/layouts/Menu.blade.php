 <style type="text/css">
     .dropdown > a{
        background: none;
        width:auto;
     }
 </style>
 <header>
            <div class="container">
                <a href="{{route('Index')}}" class="logo pull-left">
                    <img src="{{url('/')}}/public/assets/images/logo.svg" alt="logo">
                </a>
                <nav>
                    <div class="dropdown pull-left">
                        <a data-toggle="dropdown" href="{{route('SubCategory')}}">Landing Page <span><b class="caret"></b></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="{{route('SubCategory')}}">Landing Page In Bootstrap</a></li>
                            <li><a href="{{route('SubCategory')}}">Landing Page In React Js</a></li>
                            <li><a href="{{route('SubCategory')}}">Landing Page In Vue Js</a></li>
                        </ul>
                    </div>

                    <div class="dropdown pull-left">
                        <a data-toggle="dropdown" href="{{route('SubCategory')}}">Graphics <span><b class="caret"></b></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="{{route('SubCategory')}}">Design In PSD</a></li>
                            <li><a href="{{route('SubCategory')}}">Design In Illustrator</a></li>
                            <li><a href="{{route('SubCategory')}}">Design In Animate</a></li>
                        </ul>
                    </div>

                    <div class="dropdown pull-left">
                        <a data-toggle="dropdown" href="{{route('SubCategory')}}">Videos <span><b class="caret"></b></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                           <li><a href="{{route('SubCategory')}}">Video In Pr</a></li>
                           <li><a href="{{route('SubCategory')}}">Video In Cs6</a></li>
                        </ul>
                    </div>

                    <div class="dropdown pull-left">
                        <a data-toggle="dropdown" href="{{route('SubCategory')}}">Others <span><b class="caret"></b></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href="index.html">Vue JS</a></li>
                            <li><a href="browse.html">Browse Page</a></li>
                            <li><a href="single_item.html">Single Item Page</a></li>
                            <li><a href="single_item_themeforest_affiliate.html">Single Item Themeforest Affiliate Page</a></li>
                        </ul>
                    </div>
                @if(isset(Auth::user()->email))
                    
                     <div class="dropdown pull-right">
                        <a data-toggle="dropdown" href="{{route('SubCategory')}}">
<img src="{{url('/')}}/public/assets/images/eiefy_0041_User_1.png" class="img-circle" style="width:30px;">
                         </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="width: 200px;">
                            <li><a href="{{route('Profile')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i> &nbsp;&nbsp; My Profile</a></li>
                            <li><a href="{{route('My-Downloads')}}">&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-download"></i> &nbsp; My Downloads</a></li>
                            <li><a href="{{route('Cart')}}"> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Cart</a></li>
                            <li><a href="#" onclick="logout()">&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-sign-out"></i>&nbsp; Logout</a></li>
                           
                        </ul>
                    </div>
                @else
                    <ul class="list-inline pull-right">
                        <li><a href="{{route('Login')}}">
                            
                        </a></li>
                      
                        <li><a href="{{route('Login')}}">Sing in</a></li>
                        <!-- <li><a href="{{route('SignUp')}}">SignUp</a></li> -->
                      
                    </ul>
                      @endif
                </nav>
            </div>
        </header>
        <form action="{{route('logout')}}" method="post" id="logoutt">
            {{csrf_field()}}
        </form>
        <script type="text/javascript">
          function  logout(){
                document.getElementById('logoutt').submit();
            }
        </script>