@extends('Admin.layouts.Master')

@section('css')

@endsection

@section('MainSection')
<div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">store</i>
                        </div>
                        <p class="card-category">About</p>
                        <h3 class="card-title"></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="#" style="display: block;">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                          <i class="fa fa-camera"></i>
                        </div>
                        <p class="card-category">Videos </p>
                        <h3 class="card-title"></h3>
                      </div>
                      <div class="card-footer" style="display: block;">
                        <div class="stats">
                          
                          <a href="#" style="display: block;">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                          <i class="fa fa-photo"></i>
                        </div>
                        <p class="card-category">Banners </p>
                        <h3 class="card-title"></h3>
                      </div>
                      <div class="card-footer" style="display: block;">
                        <div class="stats">        
                          <a href="#" style="display: block;">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                  
                  
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                          <i class="fa fa-users"></i>
                        </div>
                        <p class="card-category">Users </p>
                        <h3 class="card-title"></h3>
                      </div>
                      <div class="card-footer" style="display: block;">
                        <div class="stats">
                          <a href="#" style="display: block;">Click Here Full Details</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
</div>
</div>
@endsection

@section('js')

@endsection