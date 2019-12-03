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

<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{url('/')}}/public/backend/img/sidebar-1.jpg">
      <div class="logo">
        <a href="{{route('Admin/Dashboard')}}" class="simple-text logo-normal">
        <center> <img src="{{url('/')}}/public/backend/images/flogo.jpg" style="width: 180px;">  </center>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="{{url('/')}}/public/backend/images/logo.png"/>
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                Paper Planes
              </span>
            </a>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>

          <button class="dropdown-btn">
          Gallery <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="fa fa-photo"></i>
              <p> Banner </p>
            </a>
          </li>
          

          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="fa fa-info"></i>
              <p> About </p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-user"></i>
              <p> Testimonials </p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="fa fa-info"></i>
              <p> Streams </p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="fa fa-building"></i>
              <p> Countries </p>
            </a>
          </li>

<br><br>
<br><br>


        </ul>
      </div>
    </div>
