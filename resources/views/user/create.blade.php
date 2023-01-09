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
                 
                  @include('user.parts.form')
                 
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
