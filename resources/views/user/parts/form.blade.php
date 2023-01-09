{{ csrf_field() }}
<div class="form-group row">
  <label for="inputFullName" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
  <div class="col-sm-10">
    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="inputname" placeholder="Name" 
      @if (isset($user) || old('name')) value="{{old('name') ? old('name') : $user->name}}" @endif>
    @error('name')
      <label id="name-error" class="error" for="name">{{ $message }}</label>
    @enderror
  </div>
</div>
<div class="form-group row">
  <label for="inputEmail" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
  <div class="col-sm-10">
    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="inputEmail" placeholder="Email"
    @if (isset($user) || old('email')) value="{{old('email') ? old('email') : $user->email}}" @endif>
    @error('email')
      <label id="email-error" class="error" for="email">{{ $message }}</label>
    @enderror
  </div>
</div>
<div class="form-group row">
  <label for="inputPhone" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span></label>
  <div class="col-sm-10">
    <input type="number" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="inputPhone" placeholder="Phone" 
    @if (isset($user) || old('phone')) value="{{old('phone') ? old('phone') : $user->phone}}" @endif>
    @error('phone')
      <label id="phone-error" class="error" for="phone">{{ $message }}</label>
    @enderror
  </div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Role <span class="text-danger">*</span></label>
  <div class="col-sm-10">
    <select class="form-control {{ $errors->has('role_id') ? 'error' : '' }}" name="role_id">
      <option disabled selected hidden>Select role</option>
      @foreach ($roles as $role)
        <option value="{{$role->id}}" 
          @if (isset($user) && $user->getRolesFirst()->id == $role->id && !old('role_id') || old('role_id') && old('role_id') == $role->id)
              selected
          @endif
          >{{$role->display_name}}</option>
      @endforeach
    </select>
    @error('role_id')
      <label id="role_id-error" class="error" for="role_id">{{ $message }}</label>
    @enderror
  </div>
</div>
<div class="form-group row">
  <div class="offset-sm-2 col-sm-10 d-flex flex-row">
    <button type="submit" class="btn btn-primary mr-2">
      @if (isset($user))
        <i class="fas fa-pencil-alt"></i>
        Update
      @else
        <i class="fa-solid fa-circle-plus"></i>
        Create
      @endif
    </button>
    <a href="{{ route('user.index')}}" class="btn btn-secondary">
      <i class="fa-regular fa-rectangle-xmark"></i>
      Cancel
    </a>
  </div>
</div>