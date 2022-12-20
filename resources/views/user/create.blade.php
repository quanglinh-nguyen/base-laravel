@extends('layout.main')

@section('title_page','Create User')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
  
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="tab-content">

              <div>
                <form class="form-horizontal">
                  <div class="form-group row">
                    <label for="inputFullName" class="col-sm-2 col-form-label">Full name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputFullName" placeholder="Full name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Role</label>
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
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputDateOfBirth" class="col-sm-2 col-form-label">Date of birth</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputDateOfBirth" placeholder="Date of birth">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputAvatar" class="col-sm-2 col-form-label">Avatar</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile" style="width: 99%; margin-left: 8px;">Choose file</label>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-circle-plus"></i>
                        Create
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
    
    </div>
  </div>
</section>

@endsection 