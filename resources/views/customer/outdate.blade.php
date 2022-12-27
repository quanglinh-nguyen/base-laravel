@extends('layout.main')

@section('title_page','List Customer')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Customer Management</h3>
        </div>
        <div class="card-action d-flex flex-row justify-content-between">
            <form action="">
                <div class="card-tools d-flex flex-row">
                    <div class="input-group">
                        <input type="text" name="table_search" class="form-control" placeholder="Keyword"/>
                    </div>
                    <div class="d-flex flex-row mx-2">
                        <button class="btn btn-primary mr-2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Search
                        </button>
                        <button class="btn btn-outline-secondary">Clear</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body p-0 card-body-project">
            <table
                class="table table-striped projects table-customer"
            >
                <thead>
                <tr>
                    <th class="sticky-col first-col">#</th>
                    <th class="sticky-col second-col">
                        Industry
                    </th>
                    <th>SubIndustry</th>
                    <th>GeoCode</th>
                    <th class="text-center">HQ or BR</th>
                    <th>Scale</th>
                    <th>OrganizationE</th>
                    <th>OrganizationV</th>
                    <th>Website</th>
                    <th>Prefix</th>
                    <th>Name</th>
                    <th>Title € - Department</th>
                    <th>Title (V) - Department</th>
                    <th>Professional</th>
                    <th>TitleLevel</th>
                    <th>Mobile</th>
                    <th>Business Email</th>
                    <th>Personal Email</th>
                    <th>Outdate Business Email</th>
                    <th>Outdate Personal Email</th>
                    <th>Address</th>
                    <th>ActionCode</th>
                    <th>Attendance</th>
                    <th>LastUpdatedDate</th>

                    <th>Banking</th>
                    <th>Status</th>
                    <th
                        style="width: 10%"
                        class="text-center"
                    >
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="sticky-col first-col">1</td>
                    <td class="sticky-col second-col">
                        Industry
                    </td>
                    <td>SubIndustry</td>
                    <td>GeoCode</td>
                    <td>HQ or BR</td>
                    <td>Scale</td>
                    <td>OrganizationE</td>
                    <td>OrganizationV</td>
                    <td>Website</td>
                    <td>Prefix</td>
                    <td>Name</td>
                    <td>Title € - Department</td>
                    <td>Title (V) - Department</td>
                    <td>Professional</td>
                    <td>
                        TitleLevelTitleLevelTitleLevelTitleLevel
                    </td>
                    <td>Mobile</td>
                    <td>Business Email</td>
                    <td>Personal Email</td>
                    <td>Outdate Business Email</td>
                    <td>
                        Outdate Personal EmailOutdate
                        Personal EmailOutdate Personal Email
                    </td>
                    <td>Address</td>
                    <td>ActionCode</td>
                    <td>Comm.Note</td>
                    <td>LastUpdatedDate</td>
                    <td>Banking</td>
                    <td class="project-state">
                        <span class="badge badge-success">
                            Success
                        </span>
                    </td>
                    <td class="project-actions text-right">
                        <a
                            class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal"
                        >
                        <i class="fa-solid fa-eye"></i>
                            View
                        </a>
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
                    <td class="sticky-col first-col">1</td>
                    <td class="sticky-col second-col">
                        Industry
                    </td>
                    <td>SubIndustry</td>
                    <td>GeoCode</td>
                    <td>HQ or BR</td>
                    <td>Scale</td>
                    <td>OrganizationE</td>
                    <td>OrganizationV</td>
                    <td>Website</td>
                    <td>Prefix</td>
                    <td>Name</td>
                    <td>Title € - Department</td>
                    <td>Title (V) - Department</td>
                    <td>Professional</td>
                    <td>
                        TitleLevelTitleLevelTitleLevelTitleLevel
                    </td>
                    <td>Mobile</td>
                    <td>Business Email</td>
                    <td>Personal Email</td>
                    <td>Outdate Business Email</td>
                    <td>
                        Outdate Personal EmailOutdate
                        Personal EmailOutdate Personal Email
                    </td>
                    <td>Address</td>
                    <td>ActionCode</td>
                    <td>Comm.Note</td>
                    <td>LastUpdatedDate</td>
                    <td>Banking</td>
                    <td class="project-state">
                        <span class="badge badge-success"
                        >Success</span
                        >
                    </td>
                    <td class="project-actions text-right">
                        <a
                            class="btn btn-primary btn-sm"
                            href="#"
                        >
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a
                            class="btn btn-info btn-sm"
                            href="#"
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
