@extends('layout.main')

@section('title_page','Acronyms Backing')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <!-- Default box -->
    <form method="post" id="create-update-acronyme-banking" action="{{route('acronyms-fields.store')}}">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Acronyms Backing</h3>
            </div>
            <div class="card-body">
                @include('acronyms.parts.form', ['array_acronym' => $array_acronym])
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-12">
                <input type="submit" value="Create" class="btn btn-success float-right">
            </div>
        </div>
    </form>
@endsection

@section('script')
    <!-- Form Validate -->
    <script src="{{asset('view/acronyms-banking/form-validation.js')}}"></script>
@endsection
