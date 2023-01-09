@extends('layout.main')
@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
  <section class="content pt-5">
    <div class="error-page">
      <h2 class="headline text-danger">500</h2>
      <div class="error-content pt-3">
        <h3><i class="fas fa-exclamation-triangle text-danger"></i> Server error.</h3>
        <p>
          We will work on fixing that right away.<br>
            <a href="{{ route('home') }}">Return to Home Page</a>
        </p>
      </div>
    </div>
  </section>
@endsection
