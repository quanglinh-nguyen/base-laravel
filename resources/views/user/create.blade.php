@extends('layout.main')

@section('title_page','Create User')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="tab-content">
              <div class="mt-3">
                <form action="{{ route('user.store') }}" method="POST" class="form-horizontal" id="createUser">
                  @csrf
                  <div class="form-group row">
                    <label for="inputFullName" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="inputname" placeholder="Name">
                      @error('name')
                        <label id="name-error" class="error" for="name">{{ $message }}</label>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                      @error('email')
                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="phone_number" id="inputPhone" placeholder="Phone">
                      @error('phone_number')
                        <label id="phone_number-error" class="error" for="phone_number">{{ $message }}</label>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Role <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                      <select class="form-control" name="role_id">
                        <option disabled selected hidden>Select role </option>
                        <option value="1">Super admin</option>
                        <option value="2">Admin</option>
                        <option value="3">Partner</option>
                      </select>
                      @error('role_id')
                        <label id="role_id-error" class="error" for="role_id">{{ $message }}</label>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10 d-flex flex-row">
                      <button type="submit" class="btn btn-primary mr-2">
                        <i class="fa-solid fa-circle-plus"></i>
                        Create
                      </button>
                      <a href="{{ route('acronyms-fields.index')}}" class="btn btn-secondary">
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
@endsection
@section('script')
    <!-- Form Validate -->
    <script src="{{asset('view/user/form-validation.js')}}"></script>
@endsection
