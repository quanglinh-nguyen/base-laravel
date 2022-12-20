@extends('layout.main')

@section('title_page','List Customer')

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Upload File</h3>
        </div>
        <div class="card-body p-4">
            <form class="form-horizontal">
                <div class="form-group row">
                    <label
                        for="inputName"
                        class="col-sm-2 col-form-label"
                    >Template file download</label
                    >
                    <div class="col-sm-10">
                        <a class="btn btn-block btn-info d-inline" download href="{{asset('storage/template/download_template.xlsx')}}">Download Template</a>
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="fileUpload"
                        class="col-sm-2 col-form-label"
                    >File Lpload</label
                    >
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileUpload">
                            <label class="custom-file-label" for="fileUpload">Choose file upload</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div
                        class="offset-sm-2 col-sm-10"
                    >
                        <button
                            type="submit"
                            class="btn btn-success"
                        >
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.Customer Management Upload History -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Customer Management Upload History</h3>
            <div class="card-tools">
                <div
                    class="input-group input-group-sm"
                    style="width: 150px"
                >
                    <input
                        type="text"
                        name="table_search"
                        class="form-control float-right"
                        placeholder="Search"
                    />

                    <div class="input-group-append">
                        <button
                            type="submit"
                            class="btn btn-default"
                        >
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped projects"
            >
                <thead>
                    <tr>
                        <th>Upload Date And Time</th>
                        <th>File Name</th>
                        <th>User Upload</th>
                        <th>Processing</th>
                        <th>File Error</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2022/12/18 10:20:30</td>
                        <td>abc.xlsx</td>
                        <td>admin</td>
                        <td>Waiting for reflection</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2022/12/18 10:20:30</td>
                        <td>abc.xlsx</td>
                        <td>admin</td>
                        <td>Processing</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2022/12/18 10:20:30</td>
                        <td>abc.xlsx</td>
                        <td>admin</td>
                        <td>Success</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2022/12/18 10:20:30</td>
                        <td>abc.xlsx</td>
                        <td>admin</td>
                        <td>Error</td>
                        <td>
                            <a class="btn btn-block btn-default d-inline" download href="{{asset('storage/template/download_template.xlsx')}}">Download File Error</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul
                class="pagination pagination-sm m-0 float-right"
            >
                <li class="page-item">
                    <a class="page-link" href="#">&laquo;</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.card -->
@endsection