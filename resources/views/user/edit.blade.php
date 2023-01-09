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
            @method('PUT')
            
            @include('user.parts.form')

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