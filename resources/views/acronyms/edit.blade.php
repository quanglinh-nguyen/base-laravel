@extends('layout.main')

@section('title_page','Edit Acronyms Backing')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <!-- Default box -->
    <!-- Default box -->
    <form method="post" id="create-update-acronyme-banking" action="{{route('acronyms-fields.update', ['acronyms_field'=> $acronym->id])}}">
        @method('PUT')
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Acronyms Backing</h3>
            </div>
            <div class="card-body">
                @include('acronyms.parts.form', ['model' => $acronym])
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-12 d-flex flex-row justify-content-end">
                <button type="submit" class="btn btn-primary mr-2">
                    <i class="fa-solid fa-circle-plus"></i>
                    Update
                </button>
                <a href="{{ route('acronyms-fields.index')}}" class="btn btn-secondary">
                    <i class="fa-regular fa-rectangle-xmark"></i>
                    Cancel
                </a>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <!-- Form Validate -->
    <script src="{{asset('view/acronyms-banking/form-validation.js')}}"></script>
@endsection
