@extends('layout.master_layout')
@section('content')

<!-- Page Title -->
<section class="page-title text-center">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">My Account</h1>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->

    <!-- login -->
    <section class="section-wrap login-register pt-0 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-sm-offset-1 mb-40">
            <div class="login">
              <h4 class="uppercase">login</h4>
            <form action="" method="post">
                <p class="form-row form-row-wide">
                  <label>username or email
                    <abbr class="required" title="required">*</abbr>
                  </label>
                  <input type="text" class="input-text" placeholder="" value="">
                </p>
                <p class="form-row form-row-wide">
                  <label>password
                    <abbr class="required" title="required">*</abbr>
                  </label>
                  <input type="text" class="input-text" placeholder="" value="">
                </p>
                <input type="submit" value="Login" class="btn">
              </form>                      
            </div>
          </div>
          <div class="col-sm-5">
            <div class="register">
              <h4 class="uppercase">Register</h4>
            <form action="user/them" method="post">         
              <input type="hidden" name="_token" value="{{csrf_token()}}">
                <p class="form-row form-row-wide">
                      <label>User Name
                        <abbr class="required" title="required">*</abbr>
                      </label>
                      <input type="text" class="input-text" placeholder="Nhap UserName" value="username" name="username">
                    </p>  
                    <p class="form-row form-row-wide">
                        <label>Full Name
                          <abbr class="required" title="required">*</abbr>
                        </label>
                        <input type="text" class="input-text" placeholder="Nhap FullName" value="fullname" name="fullname">
                      </p>   
                      <p class="form-row form-row-wide">
                          <label>Phone Number
                            <abbr class="required" title="required">*</abbr>
                          </label>
                          <input type="text" class="input-text" placeholder="Nhap PhoneNumber" value="fullname" name="phone">
                        </p>      
              <p class="form-row form-row-wide">
                <label>Email
                  <abbr class="required" title="required">*</abbr>
                </label>
                <input type="email" class="input-text" placeholder="Nhập Email" name="email" value="">
              </p>
              <p class="form-row form-row-wide">
                <label>Password
                  <abbr class="required" title="required">*</abbr>
                </label>
                <input type="text" class="input-text" placeholder="Nhap Password" name="password" value="">
              </p>
              <p class="form-row form-row-wide">
                  <label>Nhap lai password
                    <abbr class="required" title="required">*</abbr>
                  </label>
                  <input type="text" class="input-text" placeholder="Nhap lai Password" name="passwordmatch" value="">
                </p>
              <input type="submit" value="Register" class="btn">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- end login -->

@endsection