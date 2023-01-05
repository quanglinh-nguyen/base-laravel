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
          <form class="form-horizontal" action="{{ route('user.update', ['user'=>$user->id]) }}" method="POST" id="editUser">
            @method('PUT') @csrf
            <div class="form-group row">
              <label for="inputName" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="inputName" placeholder="name" value="{{$user->name}}">
                @error('name')
                  <label id="name-error" class="error" for="name">{{ $message }}</label>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{$user->email}}" readonly>
                @error('email')
                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                      @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPhone" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="phone" id="inputPhone" placeholder="Phone" value="{{$user->phone}}">
                @error('phone')
                  <label id="phone-error" class="error" for="phone">{{ $message }}</label>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Role <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <select class="form-control" name="role_id">
                  @foreach ($roles as $role)
                    @if ($user->getRolesFirst()->id == $role->id)
                      <option selected value="{{$role->id}}">{{$role->display_name}}</option>
                    @else
                      <option value="{{$role->id}}">{{$role->display_name}}</option>
                    @endif
                  @endforeach                  
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
@section('script')
    <!-- Form Validate -->
    <script src="{{asset('view/user/form-validation.js')}}"></script>
@endsection