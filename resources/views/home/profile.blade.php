@extends('layout.main')

@section('title_page','Profile')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-header p-1">
              <h5 class="nav-link">View Profile</h5>
              
            </div><!-- /.card-header -->
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="https://cdn.vox-cdn.com/thumbor/mGsDgU2JoyHyRJFaeVh9K5eKdTc=/0x0:1800x1013/1200x800/filters:focal(756x363:1044x651)/cdn.vox-cdn.com/uploads/chorus_image/image/60154183/Webp.net_resizeimage__5_.0.jpg"
                     alt="User profile picture" style="width:150px; height:150px; object-fit:cover">
              </div>

              <h3 class="profile-username text-center">Nguyễn Quyết Tiến</h3>

              <p class="text-muted text-center text-bold">Admin - EIC</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Full Name</b> <a class="float-right">Nguyễn Quyết Tiến</a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="float-right">0123456789</a>
                </li>
                <li class="list-group-item">
                  <b>Role</b> <a class="float-right">Admin</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="float-right">nguyenquyettien0102@gmail.com</a>
                </li>
                <li class="list-group-item">
                  <b>Date of Birth</b> <a class="float-right">13/01/2002</a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>

        
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-1 card-primary card-outline">
              <h5 class="nav-link">Edit Profile</h5>
              
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">

                <div>
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label for="inputFullName" class="col-sm-2 col-form-label">Full name <span class="text-danger">*</span></label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputFullName" placeholder="Full name" value="Nguyễn Quyết Tiến">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="nguyenquyettien0102@gmail.com" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPhone" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span></label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPhone" placeholder="Phone" value="0132456789">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Role <span class="text-danger">*</span></label>
                      <div class="col-sm-10">
                        <select class="form-control" >
                          <option disabled selected hidden>Select role</option>
                          <option value="1">Super admin</option>
                          <option value="2">Admin</option>
                          <option value="3">Partner</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputDateOfBirth" class="col-sm-2 col-form-label">Date of birth</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputDateOfBirth" placeholder="Date of birth" value="13/01/2002">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputAvatar" class="col-sm-2 col-form-label">Avatar</label>
                      <div class="col-sm-10">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile" style="width: 98.5%; margin-left: 8px;">Choose file</label>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">
                          <i class="fas fa-pencil-alt"></i>
                          Update
                        </button>
                        <a href="{{ route('user.index')}}" class="btn btn-secondary">
                          <i class="fa-regular fa-rectangle-xmark"></i>
                          Cancel
                        </a>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection 