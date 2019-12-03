<style>
.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #ffffff;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-top:6px;
}
/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  padding-left: 8px;
  outline:none;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  color: #ffffff;
  margin-left:7px;
}

</style>

<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{url('/')}}/public/assets/img/sidebar-1.jpg">

      <div class="logo">

        <a href="{{url('/')}}" class="simple-text logo-normal">
        <center> <img src="https://www.nbdigitech.com/assets/img/logo.png" style="width: 180px;">  </center>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <!-- <div class="user">
          <div class="photo">
          <img src="{{url('/')}}/public/assets/images/logo.png"/> 
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                Kyrgyzstan
              </span>
            </a>

          </div>
        </div> -->
        <ul class="nav">
          <li class="nav-item active " >
            <a style="box-shadow: none; background: #DE3743;" class="nav-link" href="{{url('/')}}">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>

         

        <form action="{{route('logout')}}" method="post">
            @csrf
            <li class="nav-item">
              <a class="nav-link">
              <i class="fa fa-power-off"></i>
                <p>
                  <input type="submit" style="cursor: pointer;color:white;background-color:transparent;border:none;outline:none;margin-left:-7px;" value="Log out">
                </p>
              </a>
            </li>
          </form>



        


           <br><br><br><br>


<br><br>
<br><br>











          {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('Admin/Ads')}}">
              <i class="fa fa-circle"></i>
              <p> Ads </p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('Admin/Users')}}">
              <i class="fa fa-user"></i>
              <p> Users </p>
            </a>
          </li> --}}



        </ul>
      </div>
    </div>
