@extends('layout.main')
@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
  <section class="content pt-5">
    <div class="error-page">
      <h2 class="headline text-warning">403</h2>
      <div class="error-content pt-3">
        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Forbidden! Access Denied.</h3>
        <p>
          You don't have permission to access this page.<br>
          <a href="{{ route('customer.index') }}">Return to Customers Management</a>.
        </p>
      </div>
    </div>
  </section>
@endsection