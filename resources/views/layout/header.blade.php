  <!-- Navbar -->
  <style>
    .dropdown-item:hover{
      background-color: #007bff;
      color: #FFF;
    }
  </style>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown d-flex flex-row justify-content-end align-items-center">
        <div class="text-center" style="width:50px">
          <img src="{{asset('template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image" width="40px">
        </div>
        <div class="px-2" style="position: relative">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle px-0">Nguyễn Hữu Quang Linh</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0">
            <li class="dropdown-li"><a href="{{ route('home.profile')}}" class="dropdown-item">Profile</a></li>
            <li class="dropdown-li"><a href="#" class="dropdown-item">Logout</a></li>
          </ul>
        </div>
        
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->