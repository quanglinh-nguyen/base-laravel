<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IEC Group</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.css')}}">
  
</head>
<style>
  section{
    background-image: linear-gradient(to right, rgba(17, 100, 102, 1) 0%, rgba(4, 29, 30, 1) 100%);
  }
  .btn-block{
    background-color: #116466;
    box-shadow: 0 4px 9px -4px #332d2d;
    border-color: #116466
  }
  .btn-block:hover{
    background-color: #0e5e5f;
    box-shadow: 0 5px 9px -4px #332d2d;
    border-color: #116466
  }
</style>
<body>

<section class="vh-100" style="">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10 ">
        <div class="card" style="border-radius: 1rem;">
          <div class="row">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="{{asset('template/dist/img/Banner-login.jpg')}}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;object-fit: cover; max-width: 100%;"/>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body px-lg-5 pb-lg-5 text-black">
                  <form method="POST" action="{{ route('login') }}" id="login">
                      @csrf
                  <div class="d-flex align-items-center mb-2">
                    <img src="{{asset('template/dist/img/Logo-IEC-2020_white_250.png')}}" alt="" width="19%">
                  </div>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') error @enderror"
                           value="{{ old('email') }}"  autocomplete="email" 
                    />
                    @error('email')
                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                    @enderror
                  </div>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') error @enderror"/>
                    @error('password')
                    <label id="password-error" class="error" for="password">{{ $message }}</label>
                    @enderror
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-lg btn-block text-white" type="submit">Login</button>
                  </div>
                  <a class="text-muted" href="#">Forgot password?</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
  <!-- jQuery -->
  <script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jquery-validation -->
  <script src="{{asset('template/plugins/jquery-validation/jquery.validate.js')}}"></script>
  <script src="{{asset('template/plugins/jquery-validation/additional-methods.js')}}"></script>
  <!-- Form Validate -->
  <script src="{{asset('view/login/form-validation.js')}}"></script>
</html>
