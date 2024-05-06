@extends('espace-user.layouts.main')

@section('content')
    

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
          <div class="row">
            <div class="col-lg-6 col-xl-8 col-xxl-9">
              <a href="index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" width="180" alt="">
              </a>
              <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
              </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
              <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                <div class="d-flex align-items-center w-100 h-100">
                  <div class="card-body">
                    <div class="mb-5">
                      <h2 class="fw-bolder fs-7 mb-3">Forgot your password?</h2>
                      <p class="mb-0 ">   
                        Please enter the email address associated with your account and We will email you a link to reset your password.                
                      </p>
                    </div>
                    <form>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <a href="javascript:void(0)" class="btn btn-primary w-100 py-8 mb-3">Forgot Password</a>
                      <a href="authentication-login.html" class="btn btn-light-primary text-primary w-100 py-8">Back to Login</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    @endsection