@extends('layout.main')

@section('title_page','Edit User')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
    
       <div class="col-md-12">
          <div class="card">
           <div class="card-body">
              <div class="tab-content">

                <div class="mt-3">
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
                      <div class="offset-sm-2 col-sm-10 d-flex flex-row">
                        <button type="submit" class="btn btn-primary mr-2">
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
  </section>

@endsection 