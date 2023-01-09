@extends('layout.main')

@section('title_page','Add Customer')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <!-- Default box -->
    <form method="post" id="create-update-customers" action="{{ route('customers.store') }}">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Customer</h3>
            </div>
            <div class="card-body">
                @include('customer.parts.form')
            </div>
        </div>
    </form>

@endsection

@section('script')
    <!-- Form Validate -->
    <script src="{{asset('view/customers/form-validation.js')}}"></script>
@endsection

