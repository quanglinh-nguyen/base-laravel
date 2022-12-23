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
                <form>
                  <div class="d-flex align-items-center mb-2">
                    <img src="{{asset('template/dist/img/Logo-IEC-2020_white_250.png')}}" alt="" width="19%"> 
                  </div>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example17">Email address</label>
                    <input type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label id="inputAcronyms-error" class="error" for="inputAcronyms"></label>
                  </div>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" id="form2Example27" class="form-control form-control-lg"/>
                    <label id="inputAcronyms-error" class="error" for="inputAcronyms"></label>
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-lg btn-block text-white" type="button">Login</button>
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
</html>
