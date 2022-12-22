@extends('layout.main')

@section('title_page','Edit Acronyms Backing')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <!-- Default box -->
    <!-- Default box -->
    <form method="post" id="create-update-acronyme-banking" action="{{route('acronyms-banking.update', ['acronyms_banking'=> 1])}}">
        @method('PUT')
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Acronyms Backing</h3>
            </div>
            <div class="card-body">
                @include('acronyms-banking.parts.form', [])
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-12">
                <input type="submit" value="Update Acronyms Backing" class="btn btn-success float-right">
            </div>
        </div>
    </form>
@endsection
