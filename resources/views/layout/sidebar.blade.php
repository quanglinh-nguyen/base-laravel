  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          @foreach (Config::get('Config.route') as $key => $value)
              <li class="nav-item">
                <a href="{{route($value['route_name'])}}" class="nav-link">
                  {!!$value['icon']!!}
                  <p>
                    {{$value['title']}}
                    @if (isset($value['icon_left']))
                        {!!$value['icon_left']!!}
                    @endif
                  </p>
                </a>
              
              @if (isset($value['child']))
                <ul class="nav nav-treeview">

                  @foreach ($value['child'] as $key => $value)
                    <li class="nav-item">
                      <a href="{{ route($value['route_name']) }}" class="nav-link">
                        {!!$value['icon']!!}
                        {{$value['title']}}
                      </a>
                    </li>
                  @endforeach
                </ul>
              @endif

            </li>
            @endforeach
        </ul>
      </nav>
    
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>