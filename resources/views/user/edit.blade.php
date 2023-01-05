@extends('layout.main')

@section('title_page','Edit User')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
  <div class="card">
    <div class="card-body">
      <div class="tab-content">

        <div class="mt-3">
          <form class="form-horizontal">
            <div class="form-group row">
              <label for="inputName" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="name" value="{{$user->name}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{$user->email}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPhone" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPhone" placeholder="Phone" value="{{$user->phone}}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Role <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <select class="form-control" >
                  @foreach ($roles as $role)
                    <option value="1">Super admin</option>
                  @endforeach                  
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
@endsection 