@extends('layout.main')

@section('title_page','History Update Customer')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header d-flex justify-content-start">
            <form action="">
                <div class="card-tools d-flex flex-row">
                    <input type="text" name="table_search" class="form-control" placeholder="Keyword"/>
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
        <div class="card-body p-0">
            <table
                class="table table-striped projects"
            >
                <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Data</th>
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
                        Full Name
                    </td>
                    <td>Email</td>
                    <td>
                        <p class="p-see-mode-less">
                        Industry: Old Industry -> new Industry </br>
                        SubIndustry: Old SubIndustry -> new SubIndustry </br>
                        SubIndustry: Old SubIndustry -> new SubIndustry </br>
                        GeoCode: Old GeoCode -> new GeoCode </br>
                        HQ or BR: Old HQ or BR -> new HQ or BR</br>
                        Scale: Old Scale -> new Scale </br>
                        OrganizationE: Old OrganizationE -> new OrganizationE </br>
                        OrganizationV: Old OrganizationV -> new OrganizationV </br>
                        Website: Old Website -> new Website </br>
                        Prefix: Old Prefix -> new Prefix </br>
                        Name: Old Name -> new Name </br>
                        Title € - Department: Old
                        Title € - Department -> new
                        Title € - Department </br>
                        Title (V) - Department: Old
                        Title (V) - Department -> new
                        Title (V) - Department </br>
                        Professional: Old
                        Professional -> new
                        Professional </br>
                        TitleLevel: Old TitleLevel -> new TitleLevel </br>
                        Mobile: Old Mobile -> new Mobile </br>
                        Business Email: Old
                        Business Email -> new
                        Business Email </br>
                        Personal Email: Old Personal Email -> new Personal Email </br>
                        Address: Old
                        Address -> new
                        Address </br>
                        Outdate Business Email: Old Outdate Business Email -> new Outdate Business Email </br>
                        Outdate Personal Email: Old Outdate Personal Email -> new Outdate Personal Email </br>
                        ActionCode: Old ActionCode -> new ActionCode </br>
                        Comm.Note: Old Comm.Note -> new Comm.Note </br>
                        Attendance: Old
                        Attendance -> new
                        Attendance </br>
                        LastUpdatedDate: Old LastUpdatedDate -> new LastUpdatedDate </br>
                        Banking: Old Banking -> new Banking </br>
                        </p>
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
                            href={{route('history-update-customer.edit', ['history_update_customer' => 10])}}
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Customer Detail</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <strong>Industry</strong>
                    <p class="text-muted">
                        <span>Industry old</span> => <span class="font-weight-bold">Industry new</span>
                    </p>
                    <hr>
                    <strong>SubIndustry</strong>
                    <p class="text-muted">
                        <span>SubIndustry old</span> => <span class="font-weight-bold">SubIndustry new</span>
                    </p>
                    <hr>
                    <strong>GeoCode</strong>
                    <p class="text-muted">
                        <span>GeoCode old</span> => <span class="font-weight-bold">GeoCode new</span>
                    </p>
                    <hr>
                    <strong>HQ or BR</strong>
                    <p class="text-muted">
                        <span>HQ or BR old</span> => <span class="font-weight-bold">HQ or BR new</span>
                    </p>
                    <hr>
                    <strong>Scale</strong>
                    <p class="text-muted">
                        <span>Scale old</span> => <span class="font-weight-bold">Scale new</span>
                    </p>
                    <hr>
                    <strong>OrganizationE</strong>
                    <p class="text-muted">
                        <span>OrganizationE old</span> => <span class="font-weight-bold">OrganizationE new</span>
                    </p>
                    <hr>
                    <strong>OrganizationV</strong>
                    <p class="text-muted">
                        <span>OrganizationV old</span> => <span class="font-weight-bold">OrganizationV new</span>
                    </p>
                    <hr>
                    <strong>Website</strong>
                    <p class="text-muted">
                        <span>Website old</span> => <span class="font-weight-bold">Website new</span>
                    </p>
                    <hr><strong>Prefix</strong>
                    <p class="text-muted">
                        <span>Prefix old</span> => <span class="font-weight-bold">Prefix new</span>
                    </p>
                    <hr>
                    <strong>Name</strong>
                    <p class="text-muted">
                        <span>Name old</span> => <span class="font-weight-bold">Name new</span>
                    </p>
                    <hr>
                    <strong>Title € - Department</strong>
                    <p class="text-muted">
                        <span>Title € - Department old</span> => <span class="font-weight-bold">Title € - Department new</span>
                    </p>
                    <hr>
                    <strong>Title (V) - Department</strong>
                    <p class="text-muted">
                        <span>Title (V) - Department old</span> => <span class="font-weight-bold">Title (V) - Department new</span>
                    </p>
                    <hr>
                    <strong>Professiona</strong>
                    <p class="text-muted">
                        <span>Professiona old</span> => <span class="font-weight-bold">Professiona new</span>
                    </p>
                    <hr>
                    <strong>TitleLevel</strong>
                    <p class="text-muted">
                        <span>TitleLevel old</span> => <span class="font-weight-bold">TitleLevel new</span>
                    </p>
                    <hr>
                    <strong>Mobile</strong>
                    <p class="text-muted">
                        <span>Mobile old</span> => <span class="font-weight-bold">Mobile new</span>
                    </p>
                    <hr>
                    <strong>Business Email</strong>
                    <p class="text-muted">
                        <span>Business Email old</span> => <span class="font-weight-bold">Business Email new</span>
                    </p>
                    <hr>
                    <strong>Personal Email</strong>
                    <p class="text-muted">
                        <span>Personal Email old</span> => <span class="font-weight-bold">Personal Email new</span>
                    </p>
                    <hr>
                    <strong>Address</strong>
                    <p class="text-muted">
                        <span>Address old</span> => <span class="font-weight-bold">Address new</span>
                    </p>
                    <hr>
                    <strong>Outdate Business Email</strong>
                    <p class="text-muted">
                        <span>Outdate Business Email old</span> => <span class="font-weight-bold">Outdate Business Email new</span>
                    </p>
                    <hr>
                    <strong>Outdate Personal Email</strong>
                    <p class="text-muted">
                        <span>Outdate Personal Email old</span> => <span class="font-weight-bold">Outdate Personal Email new</span>
                    </p>
                    <hr>
                    <strong>ActionCode</strong>
                    <p class="text-muted">
                        <span>ActionCode old</span> => <span class="font-weight-bold">ActionCode new</span>
                    </p>
                    <hr>
                    <strong>Attendance</strong>
                    <p class="text-muted">
                        <span>Attendance old</span> => <span class="font-weight-bold">Attendance new</span>
                    </p>
                    <hr>
                    <strong>Banking</strong>
                    <p class="text-muted">
                        <span>Banking old</span> => <span class="font-weight-bold">Banking new</span>
                    </p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <style>
        .p-see-mode-less{
            transition: all .5s;
            text-overflow: ellipsis;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
    </style>

@endsection
