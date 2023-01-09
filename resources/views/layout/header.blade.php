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
      <li class="nav-item dropdown d-flex flex-row">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle shadow-sm">Nguyễn Quyết Tiến</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0">
            <li class="dropdown-li"><a href="{{ route('home.profile')}}" class="dropdown-item">Profile</a></li>
          <form method="GET" action="{{route('logout')}}">
            <li class="dropdown-li"><button type="submit" class="dropdown-item">Logout</button></li>
          </form>
          </ul>
        </div>

      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
