@extends('layout.main')

@section('title_page','List Customer')

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Customer Management</h3>

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
                    <th>Stt</th>
                    <th>
                        Acronyms Backing
                    </th>
                    <th>
                        Full Name
                    </th>
                    <th
                        style="width: 20%"
                        class="text-center"
                    >
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            MSB
                        </td>
                        <td>Ngan hang hang hai</td>

                        <td class="project-actions text-right">
                            <a
                                class="btn btn-info btn-sm"
                                href={{route('customer.edit', ['customer' => 10])}}
                            >
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a
                                class="btn btn-danger btn-sm"
                                href="#"
                            >
                                <i class="fas fa-trash"> </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            MSB
                        </td>
                        <td>Ngan hang hang hai</td>

                        <td class="project-actions text-right">
                            <a
                                class="btn btn-info btn-sm"
                                href={{route('customer.edit', ['customer' => 10])}}
                            >
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a
                                class="btn btn-danger btn-sm"
                                href="#"
                            >
                                <i class="fas fa-trash"> </i>
                                Delete
                            </a>
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

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <strong>Industry</strong>
                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
                    <hr>
                    <strong>Industry</strong>
                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
                    <hr>
                    <strong>Industry</strong>
                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
                    <hr>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
@endsection
