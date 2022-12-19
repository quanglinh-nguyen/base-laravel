@extends('layout.main')

@section('title_page','Edit Acronyms Backing')

@section('content')
    <!-- Default box -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Acronyms Backing</h3>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputAcronyms" class="col-sm-2 col-form-label">Acronyms Backing</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputAcronyms" placeholder="Acronyms Backing">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputFullName" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputFullName" placeholder="Full Name">
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="col-12">
            <input type="submit" value="Edit Acronyms Backing" class="btn btn-success float-right">
        </div>
    </div>
@endsection
