@extends('layout.main')
@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
  <section class="content pt-5">
    <div class="error-page">
      <h2 class="headline text-warning">404</h2>
      <div class="error-content pt-3">
        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Page not found.</h3>
        <p>
          We could not find the page you were looking for.<br>
          <a href="{{ route('customer.index') }}">Return to Customers Management</a>.
        </p>
      </div>
    </div>
  </section>
@endsection